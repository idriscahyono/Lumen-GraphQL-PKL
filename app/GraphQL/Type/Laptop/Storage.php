<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Storage extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'StorageLP',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'type'	=> 	[
								'name' 	=> 'type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
            'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
		];
	}
}
