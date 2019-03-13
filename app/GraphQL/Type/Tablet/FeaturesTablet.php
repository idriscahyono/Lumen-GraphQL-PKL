<?php

namespace App\GraphQL\Type\Tablet;


use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class FeaturesTablet extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'FeaturesTablet',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'sensors'	=>	[
								'name' 	=> 'sensors', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'notifications'			=>	[
                                'name' 	=> 'notifications', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'other'	    =>	[
                                'name' 	=> 'other', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}
}