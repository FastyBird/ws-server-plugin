<?php declare(strict_types = 1);

use FastyBird\ModulesMetadata;

return [
	'create' => [
		[
			'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
			'device'     => 'device-name',
			'identifier' => 'device-name',
			'name'       => 'Device name',
			'title'      => null,
			'comment'    => null,
			'state'      => 'ready',
			'enabled'    => true,
			'control'    => ['reset', 'reboot'],
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
				'device'     => 'device-name',
				'identifier' => 'device-name',
				'name'       => 'Device name',
				'title'      => null,
				'comment'    => null,
				'state'      => 'ready',
				'enabled'    => true,
				'control'    => ['reset', 'reboot'],
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
	'update' => [
		[
			'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
			'device'     => 'device-name',
			'identifier' => 'device-name',
			'name'       => 'Device name',
			'title'      => null,
			'comment'    => null,
			'state'      => 'ready',
			'enabled'    => true,
			'control'    => ['reset', 'reboot'],
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
				'device'     => 'device-name',
				'identifier' => 'device-name',
				'name'       => 'Device name',
				'title'      => null,
				'comment'    => null,
				'state'      => 'ready',
				'enabled'    => true,
				'control'    => ['reset', 'reboot'],
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
	'delete' => [
		[
			'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
			'device'     => 'device-name',
			'identifier' => 'device-name',
			'name'       => 'Device name',
			'title'      => null,
			'comment'    => null,
			'state'      => 'ready',
			'enabled'    => true,
			'control'    => ['reset', 'reboot'],
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'         => '633c7f7c-f73b-456f-b65f-5359c3b23d9c',
				'device'     => 'device-name',
				'identifier' => 'device-name',
				'name'       => 'Device name',
				'title'      => null,
				'comment'    => null,
				'state'      => 'ready',
				'enabled'    => true,
				'control'    => ['reset', 'reboot'],
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
];
