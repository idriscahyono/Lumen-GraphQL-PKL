<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;

use App\Models\Smartwatch\Smartwatch_design;

class IDesign extends Mutation
{
    protected $attributes = [
        'name' => 'SmartwatchIDesign',
        'description' => 'Mutasi untuk menambah Jenis Design Smartwatch'
    ];

    public function type()
    {
        return GraphQL::type('SmartwatchDesign');
    }

    public function args()
    {
        return [
			'weight'	=> 	[
				'name' 	=> 'weight',
				'type' 	=> Type::nonNull(Type::int()),
            ],
            'interface'	=> 	[
				'name' 	=> 'interface',
				'type' 	=> Type::nonNull(Type::string()),
            ],
            'clock_face'	=> 	[
				'name' 	=> 'clock_face',
				'type' 	=> Type::nonNull(Type::string()),
            ],
            'shape_surface'	=> 	[
				'name' 	=> 'shape_surface',
				'type' 	=> Type::nonNull(Type::string()),
            ],
            'colors'	=> 	[
				'name' 	=> 'colors',
				'type' 	=> Type::nonNull(Type::string()),
            ],
		];
    }

    public function resolve($root, $args)
    {
        $design = new Smartwatch_design();
        $design->weight = $args['weight'];
        $design->interface = $args['interface'];
        $design->clock_face = $args['clock_face'];
        $design->shape_surface = $args['shape_surface'];
        $design->colors = $args['colors'];
        
        $saved = $design->save();
        return $design;
    }
}