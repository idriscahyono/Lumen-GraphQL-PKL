<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\Camera\Video;  

class IVideoCamera extends Mutation
{
	protected $attributes = [
		'name'		=> 'IVideoCamera',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('VideoCamera');
    }
	public function args()
	{
		return [
			'resolution_available'	=> 	[
								'name' 	=> 'resolution_available', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'fps'	=> 	[
								'name' 	=> 'fps', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $VideoCamera = new VideoCamera();
        $VideoCamera->resolution_available = $args['resolution_available'];
        $VideoCamera->fps = $args['fps'];
        
        $VideoCamera->save();
        return $VideoCamera;
    }
}
