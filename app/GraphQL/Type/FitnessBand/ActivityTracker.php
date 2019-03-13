<?php

namespace App\GraphQL\Type\FitnessBand;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ActivityTracker extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'ActivityTracker',
		'description'		=> 'Menambah Stok Fitness Band',
	];
	// protected $inputObject = true;

	public function fields()
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
}