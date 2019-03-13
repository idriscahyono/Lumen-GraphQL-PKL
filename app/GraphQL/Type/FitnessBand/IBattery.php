<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Battery;

class IBattery extends Mutation
{
	protected $attributes = [
		'name'				=> 'IBattery',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Battery');
	}

	public function args()
	{
		return[
			'charging_mode'	            =>	[
								'name' 	=> 'charging_mode', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'battery_life'	            =>	[
								'name' 	=> 'battery_life', 		
								'type' 	=> Type::nonNull(Type::int()),
			],
		];
	}

	public function resolve($root, $args)
	{
		$Battery = new Battery();
		$Battery->charging_mode 	= $args['charging_mode'];
		$Battery->battery_life 		= $args['battery_life']; 

		$Battery->save();
		return $Battery;
	}

}