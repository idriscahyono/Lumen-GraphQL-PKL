<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Sensor;

class ISensors extends Mutation
{
	protected $attributes = [
		'name'				=> 'ISensors',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Sensors');
	}
	
	public function args()
	{
		return[
			'accelerometer'	=>	[
								'name' 	=> 'accelerometer', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'gps'	=>	[
								'name' 	=> 'gps', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'gyro'	=>	[
								'name' 	=> 'gyro', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
	}
	public function resolve($root, $args)
	{
		$Sensors = new Sensors();
		$Sensors->accelerometer 	= $args['accelerometer'];
		$Sensors->gps 		        = $args['gps'];
		$Sensors->gyro 		        = $args['gyro'];

		$Sensors->save();
		return $Sensors;
	}
}