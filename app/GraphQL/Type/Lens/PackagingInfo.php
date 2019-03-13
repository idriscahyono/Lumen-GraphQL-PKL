<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class PackagingInfo extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'PackagingInfo',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'package_weight'	=>	[
				'name' 	=> 'package_weight', 		
				'type' 	=> Type::nonNull(Type::int()),
            ],
            'bow_dimensions' =>	[
                'name' 	=> 'bow_dimensions', 		
                'type' 	=> Type::nonNull(Type::string()),
            ],
		];
	}
}