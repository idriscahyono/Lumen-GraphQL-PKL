<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class SmartphoneRemoteFeatures extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'SmartphoneRemoteFeatures',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'find_my_phone'	=>	[
								'name' 	=> 'find_my_phone', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'music_control'	=>	[
								'name' 	=> 'music_control', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
	}
}