<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Feature extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Feature',
		'description' 		=> 'Tipe untuk query dan mutation tabel Feature',
    ];
    
    // protected $inputObject = true;

	public function fields()
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
}