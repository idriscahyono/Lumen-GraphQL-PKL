<?php

namespace App\GraphQL\Type\Tablet;


use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

class IMultimedia extends Mutation
{
	protected $attributes = [
		'name'				=> 'IMultimedia',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('Multimedia');
	}

	public function args()
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

	public function resolve($root, $args)
    {
        $Multimedia = new Multimedia();
		$Multimedia->screen_mirroring   = $args['screen_mirroring'];
		$Multimedia->speakers    		= $args['speakers'];
		$Multimedia->audio_jack    		= $args['audio_jack'];
		$Multimedia->michrophone    	= $args['michrophone'];
		
		$Multimedia->save();
		return $Multimedia;

    }
}