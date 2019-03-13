<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Syncing extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Syncing',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'bluetooth'	=>	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'usb_connectivity'	=>	[
								'name' 	=> 'usb_connectivity', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'wireless_protocol'	=>	[
								'name' 	=> 'wireless_protocol', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}