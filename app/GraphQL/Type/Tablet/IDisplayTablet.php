<?php

namespace App\GraphQL\Type\Tablet;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Tablet\Tablet_display;

class IDisplayTablet extends Mutation
{
    protected $attributes = [
        'name' => 'IDisplayTablet',
        'description' => 'Mutasi untuk menambah Jenis Display'
    ];

    public function type()
    {
        return GraphQL::type('TabletDisplay');
    }

    public function args()
    {
        return [
			'display_size'	=> 	[
				'name' 	=> 'display_size',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'resolution'	=> 	[
				'name' 	=> 'resolution',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'pixel_density'	=> 	[
				'name' 	=> 'pixel_density',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'technology'	=> 	[
				'name' 	=> 'technology',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'screen_to_body_ratio'	=> 	[
				'name' 	=> 'screen_to_body_ratio',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'features'	=> 	[
				'name' 	=> 'features',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $display = new Tablet_display();
        $display->display_size = $args['display_size'];
        $display->resolution = $args['resolution'];
        $display->pixel_density = $args['pixel_density'];
        $display->technology = $args['technology'];
        $display->screen_to_body_ratio = $args['screen_to_body_ratio'];
        $display->features = $args['features'];
        
        $saved = $display->save();
        return $display;
    }
}