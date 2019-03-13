<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class BatteryCharging extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'BatteryCharging',
	];
	// protected $inputObject = true;

	public function fields()
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
}