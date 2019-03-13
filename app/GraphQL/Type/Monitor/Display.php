<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Display extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Display',
		'description' 		=> 'Tipe untuk query dan mutation tabel Display',
    ];
    
    // protected $inputObject = true;

	public function fields()
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
}