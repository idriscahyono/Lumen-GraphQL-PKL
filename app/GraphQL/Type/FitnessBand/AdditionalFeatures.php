<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class AdditionalFeatures extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'AdditionalFeatures',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'alarm_clock'	            =>	[
								'name' 	=> 'alarm_clock', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'reminders'	                =>	[
								'name' 	=> 'reminders', 		
								'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'stopwatch'	                =>	[
                                'name' 	=> 'stopwatch', 		
                                'type' 	=> Type::nonNull(Type::boolean()),
            ],
		];
	}
}