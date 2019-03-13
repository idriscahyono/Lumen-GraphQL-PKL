<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Features extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Features',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'sensors'	=> 	[
								'name' 	=> 'sensors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'notifications'	         => 	[
								'name' 	=> 'notifications', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'other' => 	[
								    'name' 	=> 'white_balance_type', 		
								    'type' 	=> Type::nonNull(Type::string()),
                            ],
            
		];
	}
}
