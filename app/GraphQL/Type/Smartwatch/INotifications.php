<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Smartwatch\Smartwatch_notification;

class INotifications extends Mutation
{
    protected $attributes = [
        'name' => 'SmartwatchINotifications',
        'description' => 'Mutasi untuk menambah Jenis Notifications'
    ];

    public function type()
    {
        return GraphQL::type('SmartwatchNotifications');
    }

    public function args()
    {
        return [
			'timer'	=> 	[
				'name' 	=> 'timer',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'incoming_call'	=> 	[
				'name' 	=> 'incoming_call',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'calender_reminder'	=> 	[
				'name' 	=> 'calender_reminder',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'text_message'	=> 	[
				'name' 	=> 'text_message',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'alarm'	=> 	[
				'name' 	=> 'alarm',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $notif = new Smartwatch_notification();
        $notif->timer = $args['timer'];
        $notif->incoming_call = $args['incoming_call'];
        $notif->calender_reminder = $args['calender_reminder'];
        $notif->text_message = $args['text_message'];
        $notif->alarm = $args['alarm'];
        
        $saved = $notif->save();
        return $notif;
    }
}