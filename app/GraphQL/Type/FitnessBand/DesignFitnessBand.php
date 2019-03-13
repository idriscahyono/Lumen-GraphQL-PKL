<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class DesignFitnessBand extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'DesignFitnessBand',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'weight'	    =>	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::int()),
			],
			'interface'	    =>	[
								'name' 	=> 'interface', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'clock_face'    =>	[
								'name' 	=> 'clock_face', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'shape_surface'     =>	[
                                'name' 	=> 'shape_surface', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'colors'	=>	[
                                'name' 	=> 'colors', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
		];
	}
}