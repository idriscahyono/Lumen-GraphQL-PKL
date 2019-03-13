<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Notification;

class INotifications extends Mutation
{
	protected $attributes = [
		'name'				=> 'INotifications',
	];
	// protected $inputObject = true;

    public function type()
    {
        return GraphQL::type('Notifications');
    }
    
	public function args()
	{
		return[
			        'timer'	            =>	[
				                'name' 	=> 'timer', 		
			                    'type' 	=> Type::nonNull(Type::boolean()),
			        ],
			        'twitter'	         =>	[
				             'name' 	=> 'twitter', 		
			      	         'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'incoming_call'	    =>	[
                              'name' 	=> 'incoming_call', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'calender_reminder' =>	[
                              'name' 	=> 'calender_reminder', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'text_message'      =>	[
                              'name' 	=> 'text_message', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'facebook'	        =>	[
                              'name' 	=> 'facebook', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'alarm'	            =>	[
                              'name' 	=> 'alarm', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
                    'weather'	        =>	[
                              'name' 	=> 'weather', 		
                              'type' 	=> Type::nonNull(Type::boolean()),
                    ],
		];
    }
    
    public function resolve($root, $args)
	{
		$Notifications = new Notifications();
		$Notifications->timer 		        = $args['timer'];
		$Notifications->twitter 		    = $args['twitter'];
		$Notifications->incoming_call 	    = $args['incoming_call'];
		$Notifications->calender_reminder 	= $args['calender_reminder'];
        $Notifications->text_message 	    = $args['text_message'];
        $Notifications->facebook 	        = $args['facebook'];
        $Notifications->alarm 	            = $args['alarm'];
        $Notifications->weather 	        = $args['weather'];

        $Notifications->save();
		return $Notifications;
	}
}