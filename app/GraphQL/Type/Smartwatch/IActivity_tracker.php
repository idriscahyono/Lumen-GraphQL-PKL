<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;

use App\Models\Smartwatch\Smartwatch_activity_tracker;

class IActivity_tracker extends Mutation
{
    protected $attributes = [
        'name' => 'IActivity_tracker',
        'description' => 'Mutasi untuk menambah Jenis Activity_tracker'
    ];

    public function type()
    {
        return GraphQL::type('Activity_tracker');
    }

    public function args()
    {
        return [
			'sleep_quality'	=> 	[
				'name' 	=> 'sleep_quality',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'heart_rate'	=> 	[
				'name' 	=> 'heart_rate',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'steps'	=> 	[
				'name' 	=> 'steps',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'hours_slept'	=> 	[
				'name' 	=> 'hours_slept',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
    }

    public function resolve($root, $args)
    {
        $actTracker = new Smartwatch_activity_tracker();
        $actTracker->sleep_quality = $args['sleep_quality'];
        $actTracker->heart_rate = $args['heart_rate'];
        $actTracker->steps = $args['steps'];
        $actTracker->hours_slept = $args['hours_slept'];
        
        $saved = $actTracker->save();
        return $actTracker;
    }
}