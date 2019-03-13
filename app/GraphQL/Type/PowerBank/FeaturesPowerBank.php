<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class FeaturesPowerBank extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'FeaturesPowerBank',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'short_circuit_protection'	=>	[
					'name' 	=> 'short_circuit_protection', 		
				      'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'over_current_protection'	=>	[
                                'name' 	=> 'over_current_protection', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'led_indicators'	        =>	[
                                'name' 	=> 'led_indicators', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'over_discharge_protection'	=>	[
                                'name' 	=> 'over_discharge_protection', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'led_flash_light'	        =>	[
                                'name' 	=> 'led_flash_light', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'over_charge_protection'	=>	[
                                'name' 	=> 'over_charge_protection', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ]
		];
	}
}