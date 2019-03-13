<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Perfromance;
use App\Features;
use App\PackagingInfo;
use App\Physical;

class Lens extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Lens',
		'description' 		=> '',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	// protected $inputObject = true;

	public function fields()
	{

		[
			'id_performance' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_features' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_physical' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_packaging_info' => [
                'type' => Type::nonNull(Type::int()),
			]
		];
		return [
			'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
			'performance'   => 	[
					'name' 	=> 'performance', 		
					'type' 	=> Type::listOf(GraphQL::type('PerformanceLens')),
			],
			'features'		=> 	[
					'name' 	=> 'features', 		
					'type' 	=> Type::listOf(GraphQL::type('FeaturesLens')),
            ],
            'physical'  	=> 	[
					'name' 	=> 'physical', 		
					'type' 	=> Type::listOf(GraphQL::type('Physical')),
			],
			'packaging_info'=> 	[
					'name' 	=> 'packaging_info', 		
					'type' 	=> Type::listOf(GraphQL::type('PackagingInfo')),
			],
		];
	}
	public function resolvePerformanceField($root, $args)
    {
		return Performance::where('id', $root->id_performance)->get();
	}
	public function resolveFeaturesField($root, $args)
    {
		return Features::where('id', $root->id_features)->get();
	}
	public function resolvePhysicalField($root, $args)
    {
		return Physical::where('id', $root->id_physical)->get();
	}
	public function resolvePackagingInfoField($root, $args)
    {
		return PackagingInfo::where('id', $root->id_packaging_info)->get();
    }
}