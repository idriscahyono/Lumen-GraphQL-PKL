<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class BatterySmartphone extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'BatterySmartphone',
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
