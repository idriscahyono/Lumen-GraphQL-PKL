<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Sensor extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Sensor',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return [
			'processor_model'	=> 	[
								'name' 	=> 'processor_model', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'image_sensor_format'	    => 	[
								'name' 	=> 'image_sensor_format', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'type' 	    => 	[
								'name' 	=> 'type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'size' 	    => 	[
								'name' 	=> 'size', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'effective_resolution' 	    => 	[
								'name' 	=> 'effective_resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            
                            ],
                            
		];
	}
}
