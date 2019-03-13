<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Sensors extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Sensors',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'accelerometer'	=>	[
								'name' 	=> 'accelerometer', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'gps'	=>	[
								'name' 	=> 'gps', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'gyro'	=>	[
								'name' 	=> 'gyro', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
	}
}