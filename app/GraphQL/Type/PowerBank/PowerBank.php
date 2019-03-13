<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

use App\FeaturesPowerBank;
use APP\BatteryCharging;
use APP\Connectivity;
use APP\PowerRequirements;
use APP\DesignPowerBank;
use APP\CompabilityPowerbank;

class PowerBank extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'PowerBank',
		'description' 		=> '',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	// protected $inputObject = true;

	public function fields()
	{
		[
			'id_features' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_battery_charging' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_connectivity' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_power_requirements' => [
                'type' => Type::nonNull(Type::int()),
			],
            'id_design' => [
                'type' => Type::nonNull(Type::int()),
			],
            'id_compability' => [
                'type' => Type::nonNull(Type::int()),
			]
		];
		return [
			'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
			'features'   => 	[
					'name' 	=> 'features', 		
					'type' 	=> Type::listOf(GraphQL::type('FeaturesPowerBank')),
			],
			'battery_charging'		=> 	[
					'name' 	=> 'battery_charging', 		
					'type' 	=> Type::listOf(GraphQL::type('BatteryCharging')),
            ],
            'connectivity'  	=> 	[
					'name' 	=> 'connectivity', 		
					'type' 	=> Type::listOf(GraphQL::type('ConnectivityPowerBank')),
			],
			'power_requirements'=> 	[
					'name' 	=> 'power_requirements', 		
					'type' 	=> Type::listOf(GraphQL::type('PowerRequirements')),
            ],
            'design'  	=> 	[
					'name' 	=> 'design', 		
					'type' 	=> Type::listOf(GraphQL::type('DesignPowerBank')),
			],
			'compability'=> 	[
					'name' 	=> 'compability', 		
					'type' 	=> Type::listOf(GraphQL::type('Compability')),
			],
		];
	}

	public function resolveFeaturesField($root, $args)
    {
		return FeaturesPowerBank::where('id', $root->id_features)->get();
	}
	public function resolveBatteryChargingField($root, $args)
    {
		return BatteryCharging::where('id', $root->id_battery_charging)->get();
	}
	public function resolveConnectivityField($root, $args)
    {
		return Connectivity::where('id', $root->id_connectivity)->get();
	}
	public function resolvePowerRequirementsField($root, $args)
    {
		return PowerRequirements::where('id', $root->id_power_requirements)->get();
	}
	public function resolveDesignField($root, $args)
    {
		return DesignPowerBank::where('id', $root->id_design)->get();
	}
	public function resolveCompabilityField($root, $args)
    {
		return CompabilityPowerbank::where('id', $root->id_compability)->get();
    }
}