<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Features extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Features',
	];
	//protected $inputObject = true;

	public function fields()
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
}
