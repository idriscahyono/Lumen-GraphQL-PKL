<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Physical extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Physical',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'filter_thread'	=>	[
				'name' 	=> 'filter_thread', 		
				'type' 	=> Type::nonNull(Type::string()),
            ],
            'dimensions' =>	[
                'name' 	=> 'dimensions', 		
                'type' 	=> Type::nonNull(Type::string()),
            ],
            'weight'	        =>	[
                'name' 	=> 'weight', 		
                'type' 	=> Type::nonNull(Type::string()),
            ],        
		];
	}
}