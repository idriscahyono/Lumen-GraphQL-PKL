<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Activity_tracker extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Activity_tracker',
		'description' 		=> 'Tipe untuk query dan mutation tabel Activity_tracker',
    ];
    
    // protected $inputObject = true;

	public function fields()
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
}