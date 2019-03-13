<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class DisplayLaptop extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'DisplayLaptop',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'type'	=> 	[
								'name' 	=> 'type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'resolution'	=> 	[
								'name' 	=> 'resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'touchscreen'	=> 	[
								'name' 	=> 'touchscreen', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'features'	=> 	[
								'name' 	=> 'features', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
