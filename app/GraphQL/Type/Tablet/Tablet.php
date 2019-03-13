<?php

namespace App\GraphQL\Type\Tablet;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Tablet extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Tablet',
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
			'id_connectivity' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_features' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_multimedia' => [
                'type' => Type::nonNull(Type::int()),
			]
		];
		return [
			'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
			'connectivity'   => 	[
					'name' 	=> 'connectivity', 		
					'type' 	=> Type::listOf(GraphQL::type('ConnectivityTablet')),
			],
			'features'		=> 	[
					'name' 	=> 'features', 		
					'type' 	=> Type::listOf(GraphQL::type('FeaturesTablet')),
            ],
            'multimedia'  	=> 	[
					'name' 	=> 'multimedia', 		
					'type' 	=> Type::listOf(GraphQL::type('Multimedia')),
			]
		];
	}
	public function resolveConnectivityField($root, $args)
    {
		return Connectivity::where('id', $root->id_connectivity)->get();
	}
	public function resolveFeaturesField($root, $args)
    {
		return Features::where('id', $root->id_features)->get();
	}
	public function resolveMultimediaField($root, $args)
    {
		return Multimedia::where('id', $root->id_multimedia)->get();
	}
}