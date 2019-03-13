<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Smartwatch\Smartwatch_feature;

class IFeatures extends Mutation
{
    protected $attributes = [
        'name' => 'SmartwatchIFeatures',
        'description' => 'Mutasi untuk menambah Jenis Features'
    ];

    public function type()
    {
        return GraphQL::type('SmartwatchFeatures');
    }

    public function args()
    {
        return [
			'alarm_clock'	=> 	[
				'name' 	=> 'alarm_clock',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'reminder'	=> 	[
				'name' 	=> 'reminder',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'stopwatch'	=> 	[
				'name' 	=> 'stopwatch',
				'type' 	=> Type::nonNull(Type::boolean()),
			]
		];
    }

    public function resolve($root, $args)
    {
        
        $features = new Smartwatch_feature();
        $features->alarm_clock = $args['alarm_clock'];
        $features->reminder = $args['reminder'];
        $features->stopwatch = $args['stopwatch'];
                
        $saved = $features->save();
        return $features;
    }
}