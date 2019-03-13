<?php

namespace App\GraphQL\Type\Tablet;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Tablet\Tablet_design;

class IDesignTablet extends Mutation
{
    protected $attributes = [
        'name' => 'IDesignTablet',
        'description' => 'Mutasi untuk menambah Jenis Design'
    ];

    public function type()
    {
        return GraphQL::type('TabletDesign');
    }

    public function args()
    {
        return [
			'dimensions'	=> 	[
				'name' 	=> 'dimensions',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'weight'	=> 	[
				'name' 	=> 'weight',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'materials'	=> 	[
				'name' 	=> 'materials',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'biometrics'	=> 	[
				'name' 	=> 'biometrics',
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
        
        $design = new Tablet_design();
        $design->dimensions = $args['dimensions'];
        $design->weight = $args['weight'];
        $design->materials = $args['materials'];
        $design->biometrics = $args['biometrics'];
        $design->colors = $args['colors'];
        
        $saved = $design->save();
        return $design;
    }
}