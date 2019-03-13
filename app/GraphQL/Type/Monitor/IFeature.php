<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Monitor\Monitor_feature;

class IFeature extends Mutation
{
    protected $attributes = [
        'name' => 'IFeature',
        'description' => 'Mutasi untuk menambah Jenis Feature'
    ];

    public function type()
    {
        return GraphQL::type('Feature');
    }

    public function args()
    {
        return [
			'titable'	=> 	[
								'name' 	=> 'titable',
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'anti_glare'	=> 	[
								'name' 	=> 'anti_glare', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'built_in_webcam'	=> 	[
								'name' 	=> 'built_in_webcam',
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'integrated_speakers'	=> 	[
								'name' 	=> 'integrated_speakers',
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'tv_tuner'	=> 	[
								'name' 	=> 'tv_tuner',
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
    }

    public function resolve($root, $args)
    {
        $feature = new Monitor_feature();
        $feature->titable = $args['titable'];
        $feature->anti_glare = $args['anti_glare'];
        $feature->built_in_webcam = $args['built_in_webcam'];
        $feature->integrated_speakers = $args['integrated_speakers'];
        $feature->tv_tuner = $args['tv_tuner'];
        
        $saved = $feature->save();
        return $feature;
    }
}