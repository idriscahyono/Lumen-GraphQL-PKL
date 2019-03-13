<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class ISensor extends Mutation
{
	protected $attributes = [
		'name'		=> 'ISensor',
	];
	//protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Sensor');
	}
	
	public function args()
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

	public function resolve($root, $args)
    {
        
        $sensor = new Sensor();
        $sensor->processor_model = $args['processor_model'];
		$sensor->image_sensor_format = $args['image_sensor_format'];
		$sensor->type = $args['type'];
		$sensor->size = $args['size'];
		$sensor->effective_resolution = $args['effective_resolution'];
        
        $saved = $sensor->save();
        return $sensor;
    }

}
