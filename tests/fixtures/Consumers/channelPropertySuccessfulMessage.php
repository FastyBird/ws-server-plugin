<?php declare(strict_types = 1);

use FastyBird\ModulesMetadata;

return [
	'create' => [
		[
			'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
			'device'    => 'device-name',
			'channel'   => 'channel-name',
			'property'  => 'property-name',
			'name'      => null,
			'settable'  => true,
			'queryable' => true,
			'datatype'  => null,
			'unit'      => null,
			'format'    => null,
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
				'device'    => 'device-name',
				'channel'   => 'channel-name',
				'property'  => 'property-name',
				'name'      => null,
				'settable'  => true,
				'queryable' => true,
				'datatype'  => null,
				'unit'      => null,
				'format'    => null,
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
	'update' => [
		[
			'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
			'device'    => 'device-name',
			'channel'   => 'channel-name',
			'property'  => 'property-name',
			'name'      => null,
			'settable'  => true,
			'queryable' => true,
			'datatype'  => null,
			'unit'      => null,
			'format'    => null,
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
				'device'    => 'device-name',
				'channel'   => 'channel-name',
				'property'  => 'property-name',
				'name'      => null,
				'settable'  => true,
				'queryable' => true,
				'datatype'  => null,
				'unit'      => null,
				'format'    => null,
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
	'delete' => [
		[
			'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
			'device'    => 'device-name',
			'channel'   => 'channel-name',
			'property'  => 'property-name',
			'name'      => null,
			'settable'  => true,
			'queryable' => true,
			'datatype'  => null,
			'unit'      => null,
			'format'    => null,
		],
		[
			'routing_key' => ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY,
			'origin'      => ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
			'data'        => [
				'id'        => '73b106f6-bbd4-4bed-b6ac-bc4e8cab9e52',
				'device'    => 'device-name',
				'channel'   => 'channel-name',
				'property'  => 'property-name',
				'name'      => null,
				'settable'  => true,
				'queryable' => true,
				'datatype'  => null,
				'unit'      => null,
				'format'    => null,
			],
		],
		ModulesMetadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY,
		ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN,
	],
];
