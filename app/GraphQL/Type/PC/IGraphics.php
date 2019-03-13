<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_graphic;

class IGraphics extends Mutation
{
    protected $attributes = [
        'name' => 'IGraphics',
        'description' => 'Mutasi untuk menambah Jenis Graphics'
    ];

    public function type()
    {
        return GraphQL::type('Graphics');
    }

    public function args()
    {
        return [
			'graphics_engine'	=> 	[
				'name' 	=> 'graphics_engine',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'video_output'	=> 	[
				'name' 	=> 'video_output',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $graphics = new Pc_graphic();
        $graphics->graphics_engine = $args['graphics_engine'];
        $graphics->video_output = $args['video_output'];
        
        $saved = $graphics->save();
        return $graphics;
    }
}