<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Smartwatch\Smartwatch_sensor;

class ISensors extends Mutation
{
    protected $attributes = [
        'name' => 'ISensors',
        'description' => 'Mutasi untuk menambah Jenis Sensor'
    ];

    public function type()
    {
        return GraphQL::type('Sensors');
    }

    public function args()
    {
        return [
			'accelerometer'	=> 	[
				'name' 	=> 'accelerometer',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $sensor = new Smartwatch_sensor();
        $sensor->accelerometer = $args['accelerometer'];
        
        $saved = $sensor->save();
        return $sensor;
    }
}