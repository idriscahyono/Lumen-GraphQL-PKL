<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Exposure extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Exposure',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'exposure_lock'	    => 	[
								'name' 	=> 'exposure_lock', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'exposure_modes'    => 	[
								'name' 	=> 'exposure_modes', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
		];
	}
}
