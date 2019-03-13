<?php


namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Flash extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Flash',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'hot_shoeflash_mount'	=> 	[
								'name' 	=> 'hot_shoeflash_mount', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'lock_buttons'	    => 	[
								'name' 	=> 'lock_buttons', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'flash_features' 	    => 	[
								'name' 	=> 'flash_features', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
