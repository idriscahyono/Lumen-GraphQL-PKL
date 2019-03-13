<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Monitor\Monitor_power;

class IPower extends Mutation
{
    protected $attributes = [
        'name' => 'IPower',
        'description' => 'Mutasi untuk menambah Jenis Power'
    ];

    public function type()
    {
        return GraphQL::type('Power');
    }

    public function args()
    {
        return [
			'power_consumption'	=> 	[
								'name' 	=> 'power_consumption',
								'type' 	=> Type::nonNull(Type::int()),
							],
			'power_saving'	=> 	[
								'name' 	=> 'power_saving', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
		];
    }

    public function resolve($root, $args)
    {
        
        $power = new Monitor_power();
        $power->power_consumption = $args['power_consumption'];
        $power->power_saving = $args['power_saving'];
        
        $saved = $power->save();
        return $power;
    }
}