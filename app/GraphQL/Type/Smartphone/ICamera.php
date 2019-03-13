<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class ICamera extends Mutation
{
	protected $attributes = [
		'name'		=> 'ICameraSM',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('CameraSM');
	}
	public function args()
	{
		return [
			'main_camera'	=> 	[
								'name' 	=> 'main_camera', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'main_camera_specification'	=> 	[
								'name' 	=> 'main_camera_specification', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'selfie_camera'	=> 	[
								'name' 	=> 'selfie_camera', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'selfie_camera_specification'	=> 	[
								'name' 	=> 'selfie_camera_specification', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			 'video_recording'	=> 	[
								'name' 	=> 'video_recording', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			
		];
	}

	public function resolve($root, $args)
    {
        
        $camera = new Camera();
        $camera->main_camera = $args['main_camera'];
		$camera->main_camera_specification = $args['main_camera_specification'];
		$camera->selfie_camera = $args['selfie_camera'];
		$camera->selfie_camera_specification = $args['selfie_camera_specification'];
		$camera->video_recording = $args['video_recording'];
		//$camera->main_camera_specification = $args['main_camera_specification'];
		
        
        $saved = $camera->save();
        return $camera;
    }
}

