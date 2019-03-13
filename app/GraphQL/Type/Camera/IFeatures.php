<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IFeatures extends Mutation
{
	protected $attributes = [
		'name'		=> 'IFeatures',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Features');
	}
	public function args()
	{
		return [
			'touch_focus'	=> 	[
								'name' 	=> 'touch_focus', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'iso'	         => 	[
								'name' 	=> 'iso', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'white_balance_type' => 	[
								    'name' 	=> 'white_balance_type', 		
								    'type' 	=> Type::nonNull(Type::string()),
                            ],
            'self_timer' 	    => 	[
								'name' 	=> 'self_timer', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'auto_focus' 	    => 	[
								'name' 	=> 'auto_focus', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'microphone' 	    => 	[
								'name' 	=> 'microphone', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'incamera_editing' 	    => 	[
								'name' 	=> 'incamera_editing', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'manual_focus' 	    => 	[
								'name' 	=> 'manual_focus', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
             'af_points' 	    => 	[
								'name' 	=> 'af_points', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
		];
	}

	
	public function resolve($root, $args)
    {
        
        $features = new Features();
        $features->touch_focus = $args['touch_focus'];
		$features->iso = $args['iso'];
		$features->white_balance_type = $args['white_balance_type'];
		$features->self_timer = $args['self_timer'];
		$features->auto_focus = $args['auto_focus'];
		$features->microphone = $args['microphone'];
		$features->incamera_editing = $args['incamera_editing'];
		
        
        $saved = $features->save();
        return $features;
    }
}
