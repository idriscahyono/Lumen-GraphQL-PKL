<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Monitor\Monitor_display;

class IDisplay extends Mutation
{
    protected $attributes = [
        'name' => 'IDisplay',
        'description' => 'Mutasi untuk menambah Jenis Display'
    ];

    public function type()
    {
        return GraphQL::type('Display');
    }

    public function args()
    {
        return [
			'refresh_rate'	=> 	[
								'name' 	=> 'refresh_rate', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'maximum_resolution'	=> 	[
								'name' 	=> 'maximum_resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'native_resolution'	=> 	[
								'name' 	=> 'native_resolution',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'response_time'	=> 	[
								'name' 	=> 'response_time',
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'display_type'	=> 	[
								'name' 	=> 'display_type',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'panel_type'	=> 	[
								'name' 	=> 'panel_type',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'synchronization_technology'	=> 	[
								'name' 	=> 'synchronization_technology',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'aspect_ratio'	=> 	[
								'name' 	=> 'aspect_ratio',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'brightness'	=> 	[
								'name' 	=> 'brightness',
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'screen_size'	=> 	[
								'name' 	=> 'screen_size',
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'horizontal_viewing_angle'	=> 	[
								'name' 	=> 'horizontal_viewing_angle',
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'vertical_viewing_angle'	=> 	[
								'name' 	=> 'vertical_viewing_angle',
								'type' 	=> Type::nonNull(Type::int()),
            ],
            'smart_display'	=> 	[
								'name' 	=> 'smart_display',
								'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'touch_screen'	=> 	[
								'name' 	=> 'touch_screen',
								'type' 	=> Type::nonNull(Type::boolean()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $display = new Monitor_display();
        $display->refresh_rate = $args['refresh_rate'];
        $display->maximum_resolution = $args['maximum_resolution'];
        $display->native_resolution = $args['native_resolution'];
        $display->response_time = $args['response_time'];
        $display->display_type = $args['display_type'];
        $display->panel_type = $args['panel_type'];
        $display->synchronization_technology = $args['synchronization_technology'];
        $display->aspect_ratio = $args['aspect_ratio'];
        $display->brightness = $args['brightness'];
        $display->screen_size = $args['screen_size'];
        $display->horizontal_viewing_angle = $args['horizontal_viewing_angle'];
        $display->vertical_viewing_angle = $args['vertical_viewing_angle'];
        $display->smart_display = $args['smart_display'];
        $display->touch_screen = $args['touch_screen'];

        $display->save();

        return $display;
    }
}
