<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ConnectivitySM extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'ConnectivitySM',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'bluetooth'	=> 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
            'wi_fi'	=> 	[
								'name' 	=> 'wi_fi', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'usb'	=> 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'gps'	=> 	[
								'name' 	=> 'gps', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'other'	=> 	[
								'name' 	=> 'other', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
