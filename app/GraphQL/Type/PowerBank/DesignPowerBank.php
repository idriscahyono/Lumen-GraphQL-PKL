<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class DesignPowerBank extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'DesignPowerBank',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'colors'	=>	[
						'name' 	=> 'colors', 		
						'type' 	=> Type::nonNull(Type::string()),
            ],
            'shapeform_factor'	=>	[
                        'name' 	=> 'shapeform_factor', 		
                        'type' 	=> Type::nonNull(Type::string()),
            ],
            'weight'	=>	[
                        'name' 	=> 'weight', 		
                        'type' 	=> Type::nonNull(Type::int()),
            ],
            'dimensions'	=>	[
                        'name' 	=> 'dimensions', 		
                        'type' 	=> Type::nonNull(Type::int()),
            ]
		];
	}
}