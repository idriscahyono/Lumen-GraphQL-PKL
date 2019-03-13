<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use App\PackagingInfo;

class IPackagingInfo extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPackagingInfo',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('PackagingInfo');
	}

	public function args()
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

	public function resolve($root, $args)
    {
        $PackagingInfo = new PackagingInfo();
		$PackagingInfo->package_weight    = $args['package_weight'];
		$PackagingInfo->bow_dimensions    = $args['bow_dimensions'];
		
		$PackagingInfo->save();
		return $PackagingInfo;

    }
}