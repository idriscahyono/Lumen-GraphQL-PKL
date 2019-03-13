<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;

use App\Models\Monitor\Monitor_dimension;

class IDimension extends Mutation
{
    protected $attributes = [
        'name' => 'IDimension',
        'description' => 'Mutasi untuk menambah Jenis Dimension'
    ];

    public function type()
    {
        return GraphQL::type('Dimension');
    }

    public function args()
    {
        return [
			'width'	=> 	[
								'name' 	=> 'width',
								'type' 	=> Type::nonNull(Type::int()),
							],
			'depth'	=> 	[
								'name' 	=> 'depth', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'weight'	=> 	[
								'name' 	=> 'weight',
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'stand_included'	=> 	[
								'name' 	=> 'stand_included',
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
    }

    public function resolve($root, $args)
    {
        
        $dimension = new Monitor_dimension();
        $dimension->width = $args['width'];
        $dimension->depth = $args['depth'];
        $dimension->weight = $args['weight'];
        $dimension->stand_included = $args['stand_included'];
        
        $saved = $dimension->save();
        return $dimension;
    }
}