<?php declare(strict_types = 1);

/**
 * ServerSubscriber.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:WsServerPlugin!
 * @subpackage     Subscribers
 * @since          0.1.0
 *
 * @date           21.12.20
 */

namespace FastyBird\WsServerPlugin\Subscribers;

use FastyBird\SocketServerFactory\Events as SocketServerFactoryEvents;
use IPub\WebSockets;
use Nette\Utils;
use Psr\Log;
use React\Socket;
use Symfony\Component\EventDispatcher;
use Throwable;

/**
 * Server startup subscriber
 *
 * @package         FastyBird:WsServerPlugin!
 * @subpackage      Subscribers
 *
 * @author          Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ServerSubscriber implements EventDispatcher\EventSubscriberInterface
{

	/** @var WebSockets\Server\Handlers */
	private WebSockets\Server\Handlers $handlers;

	/** @var WebSockets\Server\Configuration */
	private WebSockets\Server\Configuration $configuration;

	/** @var Log\LoggerInterface */
	private Log\LoggerInterface $logger;

	public function __construct(
		WebSockets\Server\Handlers $handlers,
		WebSockets\Server\Configuration $configuration,
		?Log\LoggerInterface $logger = null
	) {
		$this->handlers = $handlers;
		$this->configuration = $configuration;

		$this->logger = $logger ?? new Log\NullLogger();
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents(): array
	{
		return [
			SocketServerFactoryEvents\InitializeEvent::class => 'initialize',
		];
	}

	/**
	 * @param SocketServerFactoryEvents\InitializeEvent $event
	 *
	 * @return void
	 */
	public function initialize(SocketServerFactoryEvents\InitializeEvent $event): void
	{
		$event->getServer()->on('connection', function (Socket\ConnectionInterface $connection): void {
			if ($connection->getLocalAddress() === null) {
				return;
			}

			$parsed = Utils\ArrayHash::from((array) parse_url($connection->getLocalAddress()));

			if ($parsed->offsetExists('port') && $parsed->offsetGet('port') === $this->configuration->getPort()) {
				$this->handlers->handleConnect($connection);
			}
		});

		$event->getServer()->on('error', function (Throwable $ex): void {
			$this->logger->error('Could not establish connection', [
				'source'    => 'ws-server-plugin',
				'type'      => 'subscriber',
				'exception' => [
					'message' => $ex->getMessage(),
					'code'    => $ex->getCode(),
				],
			]);
		});

		$this->logger->debug('Launching WebSockets WS Server', [
			'source' => 'ws-server-plugin',
			'type'   => 'subscriber',
			'server' => [
				'address' => $this->configuration->getAddress(),
				'port'    => $this->configuration->getPort(),
			],
		]);
	}

}
