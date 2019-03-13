<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Smartwatch\Smartwatch_display;

class IDisplay extends Mutation
{
    protected $attributes = [
        'name' => 'SmartwatchIDisplay',
        'description' => 'Mutasi untuk menambah Jenis Display'
    ];

    public function type()
    {
        return GraphQL::type('SmartwatchDisplay');
    }

    public function args()
    {
        return [
			'display_tecnology'	=> 	[
				'name' 	=> 'display_tecnology',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'screen_size'	=> 	[
				'name' 	=> 'screen_size',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'screen_resolution'	=> 	[
				'name' 	=> 'screen_resolution',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'touch_sreen'	=> 	[
				'name' 	=> 'touch_sreen',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'pixel_density_sharpness'	=> 	[
				'name' 	=> 'pixel_density_sharpness',
				'type' 	=> Type::nonNull(Type::int()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $display = new Smartwatch_display();
        $display->display_tecnology = $args['display_tecnology'];
        $display->screen_size = $args['screen_size'];
        $display->screen_resolution = $args['screen_resolution'];
        $display->touch_sreen = $args['touch_sreen'];
        $display->pixel_density_sharpness = $args['pixel_density_sharpness'];
        
        $saved = $display->save();
        return $display;
    }
}