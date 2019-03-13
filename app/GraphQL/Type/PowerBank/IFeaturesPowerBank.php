<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

class IFeaturesPowerBank extends Mutation
{
	protected $attributes = [
		'name'				=> 'IFeaturesPowerBank',
	];
	// protected $inputObject = true;

      public function type()
	{
		return GraphQL::type('Features');
      }
	public function args()
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
      
      public function resolve($root, $args)
      {
          $Features = new Features();
          $Features->short_circuit_protection   = $args['short_circuit_protection'];
          $Features->over_current_protection    = $args['over_current_protection'];
          $Features->led_indicators    	      = $args['led_indicators'];
          $Features->over_discharge_protection  = $args['over_discharge_protection'];
          $Features->led_flash_light    	      = $args['led_flash_light'];
          $Features->over_charge_protection    	= $args['over_charge_protection'];
          
          $Features->save();
          return $Features;
      }
}