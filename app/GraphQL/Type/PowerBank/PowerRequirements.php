<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class PowerRequirements extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'PowerRequirements',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'power_output'	=>	[
								'name' 	=> 'power_output', 		
								'type' 	=> Type::nonNull(Type::int()),
            ],
            'power_input'	=>	[
                                'name' 	=> 'power_input', 		
                                'type' 	=> Type::nonNull(Type::int()),
            ]
		];
	}
}