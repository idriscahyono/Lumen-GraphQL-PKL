<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Lens extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Lens',
	];
	//protected $inputObject = true;

    public function fields()
	{
		return [
			'focal_length'	=> 	[
								'name' 	=> 'focal_length', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'lens_type'	    => 	[
								'name' 	=> 'lens_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'mount' 	    => 	[
								'name' 	=> 'mount', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
