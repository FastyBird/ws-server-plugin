<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\WsServerPlugin\Consumers;
use FastyBird\WsServerPlugin\Controllers;
use FastyBird\WsServerPlugin\Events;
use FastyBird\WsServerPlugin\Sockets;
use FastyBird\WsServerPlugin\Subscribers;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../BaseTestCase.php';

/**
 * @testCase
 */
final class ServicesTest extends BaseTestCase
{

	public function testServicesRegistration(): void
	{
		$container = $this->createContainer();

		Assert::notNull($container->getByType(Subscribers\ApplicationSubscriber::class));

		Assert::notNull($container->getByType(Events\WsClientConnectedHandler::class));
		Assert::notNull($container->getByType(Events\WsMessageHandler::class));

		Assert::notNull($container->getByType(Controllers\ExchangeController::class));

		Assert::notNull($container->getByType(Consumers\ModuleMessageConsumer::class));

		Assert::notNull($container->getByType(Sockets\Sender::class));
	}

}

$test_case = new ServicesTest();
$test_case->run();
