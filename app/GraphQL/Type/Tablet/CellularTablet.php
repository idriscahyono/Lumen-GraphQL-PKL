<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class CellularTablet extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'CellularTablet',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'data'	=> 	[
								'name' 	=> 'data', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'sim_type'	    => 	[
								'name' 	=> 'sim_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'volte' 	=> 	[
								'name' 	=> 'volte', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}
}
