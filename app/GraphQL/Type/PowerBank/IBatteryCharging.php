<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use APP\BatteryCharging;


class IBatteryCharging extends Mutation
{
	protected $attributes = [
		'name'				=> 'IBatteryCharging',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('BatteryCharging');
	}

	public function args()
	{
		return[
			'charging_type_time'	=>	[
								'name' 	=> 'charging_type_time', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'battery_type'	=>	[
                                'name' 	=> 'battery_type', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'capacity'	        =>	[
                                'name' 	=> 'capacity', 		
                                'type' 	=> Type::nonNull(Type::int()),
            ]
		];
	}

	public function resolve($root, $args)
    {
        $BatteryCharging = new BatteryCharging();
		$BatteryCharging->charging_type_time    = $args['charging_type_time'];
		$BatteryCharging->battery_type    		= $args['battery_type'];
		$BatteryCharging->capacity    			= $args['capacity'];
		
		$BatteryCharging->save();
		return $BatteryCharging;

    }
}