<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;



class IMultimediaLP extends Mutation
{
	protected $attributes = [
		'name'		=> 'IMultimediaLP',
	];
	public function type()
    {
        return GraphQL::type('Multimedia');
	}

	public function args()
	{
		return [
			'secondary_camrearfacing'	=> 	[
								'name' 	=> 'secondary_camrearfacing', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'microphone_type'	=> 	[
								'name' 	=> 'microphone_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'inbuilt_microphone'	=> 	[
								'name' 	=> 'inbuilt_microphone', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'webcam'	=> 	[
								'name' 	=> 'webcam', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'speakers'	=> 	[
								'name' 	=> 'speakers', 		
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
        
        $multimedia = new Multimedia();
        $multimedia->secondary_camrearfacing = $args['secondary_camrearfacing'];
		$multimedia->microphone_type = $args['microphone_type'];
		$multimedia->inbuilt_microphone = $args['inbuilt_microphone'];
		$multimedia->webcam = $args['webcam'];
		$multimedia->speakers = $args['speakers'];
		$multimedia->video_recording = $args['video_recording'];
		
		
        
        $saved = $multimedia->save();
        return $multimedia;
    }
}
