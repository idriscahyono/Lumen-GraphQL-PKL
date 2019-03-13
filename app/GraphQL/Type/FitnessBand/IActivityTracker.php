<?php

namespace App\GraphQL\Type\FitnessBand;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\ActivityTracker;

class IActivityTracker extends Mutation
{
	protected $attributes = [
		'name'				=> 'IActivityTracker',
		'description'		=> 'Mutasi Activity Tracker',
	];
    // protected $inputObject = true;
    
    public function type()
    {
        return GraphQL::type('ActivityTracker');
    }

	public function args()
	{
		return [
			'calories_intake_burned'	=>	[
								'name' 	=> 'calories_intake_burned', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'activity_inactivity'		=> 	[
								'name' 	=> 'activity_inactivity', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'distance'					=> 	[
								'name' 	=> 'distance', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'sleep_quality'				=> 	[
								'name' 	=> 'sleep_quality', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'active_minutes'			=> 	[
								'name' 	=> 'active_minutes', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'heart_rate'				=> 	[
								'name' 	=> 'heart_rate', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'steps'						=> 	[
								'name' 	=> 'steps', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'hours_slept'				=> 	[
								'name' 	=> 'hours_slept', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],								
		];
    }
    
    public function resolve($root, $args)
    {
        $activityTracker = new ActivityTracker();
        $activityTracker->calories_intake_burned    = $args['calories_intake_burned'];
        $activityTracker->activity_inactivity       = $args['activity_inactivity'];
        $activityTracker->distance                  = $args['distance'];
        $activityTracker->sleep_quality             = $args['sleep_quality'];
        $activityTracker->active_minutes            = $args['active_minutes'];
        $activityTracker->heart_rate                = $args['heart_rate'];
        $activityTracker->steps                     = $args['steps'];
		$activityTracker->hours_slept               = $args['hours_slept'];
		
		$activityTracker->save();
		return $activityTracker;

    }
}