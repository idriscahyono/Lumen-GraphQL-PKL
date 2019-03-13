<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class BatteryCamera extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'BatteryCamera',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'battery_type'	=> 	[
								'name' 	=> 'battery_type', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'battery'	    => 	[
								'name' 	=> 'battery', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'no_of_shots' 	=> 	[
								'name' 	=> 'no_of_shots', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'battery_model' 	=> 	[
								'name' 	=> 'battery_model', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
