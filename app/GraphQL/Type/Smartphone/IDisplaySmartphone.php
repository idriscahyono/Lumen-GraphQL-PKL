<?php


namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IDisplaySmartphone extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDisplaySmartphone',
	];
	public function type()
    {
        return GraphQL::type('DisplaySmartphone');
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
        
        $display = new Display();
        $display->display_size = $args['display_size'];
		$display->resolution = $args['resolution'];
		$display->pixel_density = $args['pixel_density'];
		$display->technology = $args['technology'];
		$display->screen_to_body_ratio = $args['screen_to_body_ratio'];
		$display->features = $args['features'];
		//$display->main_display_specification = $args['main_display_specification'];
		
        
        $saved = $display->save();
        return $display;
    }

}
