<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Compability extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Compability',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'compatible_os'	            =>	[
								'name' 	=> 'compatible_os', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}