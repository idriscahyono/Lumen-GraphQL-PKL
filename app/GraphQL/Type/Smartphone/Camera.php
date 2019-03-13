<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Camera extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'CameraSM',
	];
	//protected $inputObject = true;

	public function fields()
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
}

