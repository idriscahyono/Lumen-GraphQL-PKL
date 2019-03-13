<?php

namespace App\GraphQL\Type\FitnessBand;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Model\Design\ActivityTracker;
use App\Model\Design\AdditionalFeature;
use App\Model\Design\Battery;
use App\Model\Design\Compability;
use App\Model\Design\Design;
use App\Model\Design\Display;
use App\Model\Design\Notification;
use App\Model\Design\Ruggednes;
use App\Model\Design\Sensor;
use App\Model\Design\SmartphoneRemoteFeature;
use App\Model\Design\Syncing;

class FitnessBand extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'FitnessBand',
		'description' 		=> 'Tambah Stok Barang',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	// protected $inputObject = true;

	public function fields()
	{
		[
			'id_activity_tracker' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_sensors' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_syncing' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_smartphone_remote_features' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_display' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_battery'=> [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_compability'=> [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_ruggedness'=> [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_additional_features'=> [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_notifications'=> [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_design'=> [
                'type' => Type::nonNull(Type::int()),
            ]
		];
		return [
			'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
			'activity_tracker'			=> 	[
								'name' 	=> 'activity_tracker', 		
								'type' 	=> Type::listOf(GraphQL::type('ActivityTracker')),
			],
			'sensors'					=>[
								'name'	=>	'sensors',
								'type'	=>	Type::listOf(GraphQL::type('Sensors')),
			],
			'syncing'					=> 	[
								'name' 	=> 'syncing', 		
								'type' 	=> Type::listOf(GraphQL::type('Syncing')),
			],
			'smartphone_remote_features'=> 	[
								'name' 	=> 'smartphone_remote_features', 		
								'type' 	=> Type::listOf(GraphQL::type('SmartphoneRemoteFeatures')),
			],
			'design'					=> 	[
								'name' 	=> 'design', 		
								'type' 	=> Type::listOf(GraphQL::type('DesignFitnessBand')),
			],
			'display'					=> 	[
								'name' 	=> 'display', 		
								'type' 	=> Type::listOf(GraphQL::type('Display')),
			],
			'battery'					=> 	[
								'name' 	=> 'battery', 		
								'type' 	=> Type::listOf(GraphQL::type('Battery')),
			],
			'compability'				=> 	[
								'name' 	=> 'compability', 		
								'type' 	=> Type::listOf(GraphQL::type('Compability')),
			],
			'ruggedness'				=> 	[
								'name' 	=> 'ruggedness', 		
								'type' 	=> Type::listOf(GraphQL::type('Ruggedness')),
			],
			'additional_features'		=> 	[
								'name' 	=> 'additional_features', 		
								'type' 	=> Type::listOf(GraphQL::type('AdditionalFeatures')),
			],
			'notifications'				=> 	[
								'name' 	=> 'notifications', 		
								'type' 	=> Type::listOf(GraphQL::type('Notifications')),
			]								
		];
    }
    
        //resolve yang di sini untuk mendapatkan nilai dari IActivityTracker
		public function resolveActivityTrackerField($root, $args)
		{
			return ActivityTracker::where('id', $root->id_activity_tracker)->get();
		}
		public function resolveSensorsField($root, $args)
		{
			return Sensor::where('id', $root->id_sensors)->get();
		}
		public function resolveSyncingField($root, $args)
		{
			return Syncing::where('id', $root->id_syncing)->get();
		}
		public function resolveSmartphoneRemoteFeaturesField($root, $args)
		{
			return SmartphoneRemoteFeature::where('id', $root->id_smartphone_remote_features)->get();
		}
		public function resolveDisplayField($root, $args)
		{
			return Display::where('id', $root->id_display)->get();
		}
		public function resolveBatteryField($root, $args)
		{
			return Battery::where('id', $root->id_battery)->get();
		}
		public function resolveCompabilityField($root, $args)
		{
			return Compability::where('id', $root->id_compability)->get();
		}
		public function resolveRuggednessField($root, $args)
		{
			return Ruggednes::where('id', $root->id_ruggedness)->get();
		}
		public function resolveFeaturesField($root, $args)
		{
			return Features::where('id', $root->id_additional_features)->get();
		}
		public function resolveNotificationsField($root, $args)
		{
			return Notification::where('id', $root->id_notifications)->get();
		}
		public function resolveDesignField($root, $args)
		{
			return Design::where('id', $root->id_design)->get();
		}

}