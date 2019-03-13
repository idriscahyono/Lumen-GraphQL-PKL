<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Battery extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Battery',
	];
	// protected $inputObject = true;

	public function fields()
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
}