<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IMultimediaSM extends Mutation
{
	protected $attributes = [
		'name'		=> 'IMultimediaSM',
	];
	public function type()
    {
        return GraphQL::type('MultimediaSM');
	}

	public function args()
	{
		return [
			'screen_mirroring'	=> 	[
								'name' 	=> 'screen_mirroring', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'speakers'	=> 	[
								'name' 	=> 'speakers', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'audio_jack'	=> 	[
								'name' 	=> 'audio_jack', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'michrophone'	=> 	[
								'name' 	=> 'michrophone', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],




		];
	}

	public function resolve($root, $args)
    {
        
        $multimedia = new Multimedia();
        $multimedia->screen_mirroring = $args['screen_mirroring'];
		$multimedia->speakers = $args['speakers'];
		$multimedia->audio_jack = $args['audio_jack'];
		$multimedia->michrophones = $args['michrophone'];
		//$multimedia->main_multimedia_specification = $args['main_multimedia_specification'];
		
        
        $saved = $multimedia->save();
        return $multimedia;
    }
}
