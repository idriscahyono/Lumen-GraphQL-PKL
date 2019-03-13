<?php

namespace App\GraphQL\Type\Tablet;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Multimedia extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Multimedia',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'screen_mirroring'	=>	[
								'name' 	=> 'screen_mirroring', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'speakers'			=>	[
                                'name' 	=> 'speakers', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'audio_jack'	    =>	[
                                'name' 	=> 'audio_jack', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'michrophone'	    =>	[
                                'name' 	=> 'michrophone', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}
}