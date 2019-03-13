<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\AdditionalFeature;

class IAdditionalFeatures extends Mutation
{
	protected $attributes = [
		'name'				=> 'IAdditionalFeatures',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('AdditionalFeatures');
	}
	
	public function args()
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

	public function resolve($root, $args)
	{
		$AdditionalFeatures = new AdditionalFeatures();
		$AdditionalFeatures->alarm_clock 	= $args['alarm_clock'];
		$AdditionalFeatures->reminders 		= $args['reminders']; 
		$AdditionalFeatures->stopwatch 		= $args['stopwatch'];  

		$AdditionalFeatures->save();
		return $AdditionalFeatures;
	}
}