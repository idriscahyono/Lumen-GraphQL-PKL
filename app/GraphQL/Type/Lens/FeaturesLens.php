<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class FeaturesLens extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'FeaturesLens',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'autofocus'	        =>	[
								'name' 	=> 'autofocus', 		
								'type' 	=> Type::nonNull(Type::boolean()),
            ],
		];
	}
}