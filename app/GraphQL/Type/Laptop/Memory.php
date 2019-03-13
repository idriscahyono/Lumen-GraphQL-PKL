<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Memory extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Memory',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'ram_type'	=> 	[
								'name' 	=> 'ram_type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'memory_slots'	=> 	[
								'name' 	=> 'memory_slots', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'ram_speed'	=> 	[
								'name' 	=> 'ram_speed', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'upgradeable'	=> 	[
								'name' 	=> 'upgradeable', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	
}
