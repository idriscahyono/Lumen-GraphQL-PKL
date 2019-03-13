<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class General extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'General',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'dimensions'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'operating_system'	=> 	[
								'name' 	=> 'operating_system', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'weight'	=> 	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'colors'	=> 	[
								'name' 	=> 'colors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
