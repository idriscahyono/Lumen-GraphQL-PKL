<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Ruggedness extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Ruggedness',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'water_resistance'	        =>	[
								'name' 	=> 'water_resistance', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}