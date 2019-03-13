<?php

namespace App\GraphQL\Type\Tablet;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class BatteryTablet extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'BatteryTablet',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'fast_charging'	    => 	[
								'name' 	=> 'fast_charging', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'wireless_charging' 	=> 	[
								'name' 	=> 'wireless_charging', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}
}
