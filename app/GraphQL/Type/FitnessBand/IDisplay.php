<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Display;

class IDisplay extends Mutation
{
	protected $attributes = [
		'name'				=> 'IDisplay',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Display');
	}

	public function args()
	{
		return[
			'display_tecnology'	        =>	[
								'name' 	=> 'display_tecnology', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'screen_size'	            =>	[
								'name' 	=> 'screen_size', 		
								'type' 	=> Type::nonNull(Type::int()),
			],
			'screen_resolution'         =>	[
								'name' 	=> 'screen_resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'touch_sreen'               =>	[
                                'name' 	=> 'touch_sreen', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'pixel_density_sharpness'	=>	[
                                'name' 	=> 'pixel_density_sharpness', 		
                                'type' 	=> Type::nonNull(Type::int()),
            ],
		];
	}

	public function resolve($root, $args)
	{
		$Display = new Display();
		$Display->display_tecnology 		= $args['display_tecnology'];
		$Display->screen_size 				= $args['screen_size'];
		$Display->screen_resolution 		= $args['screen_resolution'];
		$Display->touch_sreen 				= $args['touch_sreen'];
		$Display->pixel_density_sharpness 	= $args['pixel_density_sharpness'];

		$Display->save();
		return $Display;
	}
}