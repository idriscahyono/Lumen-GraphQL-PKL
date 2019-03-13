<?php

namespace App\GraphQL\Type\PowerBank;

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
			'compatible_devices'	=>	[
								'name' 	=> 'compatible_devices', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'compatible_brand'	=>	[
                                'name' 	=> 'compatible_brand', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}
}