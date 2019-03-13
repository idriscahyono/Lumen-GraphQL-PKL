<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Notifications extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'SmartwatchNotifications',
		'description' 		=> 'Tipe untuk query dan mutation tabel Notifications',
    ];
    
    // protected $inputObject = true;

	public function fields()
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
}