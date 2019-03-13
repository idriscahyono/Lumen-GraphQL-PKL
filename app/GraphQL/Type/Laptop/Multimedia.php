<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Multimedia extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Multimedia',
	];
	//protected $inputObject = true;

	public function fields()
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
}
