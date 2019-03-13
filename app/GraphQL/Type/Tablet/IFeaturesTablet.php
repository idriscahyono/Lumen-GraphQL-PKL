<?php

namespace App\GraphQL\Type\Tablet;


use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

class IFeaturesTablet extends Mutation
{
	protected $attributes = [
		'name'				=> 'IFeaturesTablet',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('Features');
	}

	public function args()
	{
		return[
			'sensors'	=>	[
								'name' 	=> 'sensors', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'notifications'			=>	[
                                'name' 	=> 'notifications', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'other'	    =>	[
                                'name' 	=> 'other', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}

	public function resolve($root, $args)
    {
        $Features = new Features();
		$Features->sensors          = $args['sensors'];
		$Features->notifications    = $args['notifications'];
		$Features->other    		= $args['other'];
	
		$Features->save();
		return $Features;

    }
}