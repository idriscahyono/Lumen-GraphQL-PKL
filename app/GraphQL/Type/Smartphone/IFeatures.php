<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IFeatures extends Mutation
{
	protected $attributes = [
		'name'		=> 'IFeaturesSM',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('FeaturesSM');
	}
	public function args()
	{
		return [
			'sensors'	=> 	[
								'name' 	=> 'sensors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'notifications'	         => 	[
								'name' 	=> 'notifications', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'other' => 	[
								    'name' 	=> 'white_balance_type', 		
								    'type' 	=> Type::nonNull(Type::string()),
                            ],
            
		];
	}

	public function resolve($root, $args)
    {
        
        $features = new Features();
        $features->sensors = $args['sensors'];
		$features->notifications = $args['notifications'];
		$features->white_balance_type = $args['white_balance_type'];
		//$features->main_features_specification = $args['main_features_specification'];
		
        
        $saved = $features->save();
        return $features;
    }
}
