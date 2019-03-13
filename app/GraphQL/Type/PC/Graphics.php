<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Graphics extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Graphics',
		'description' 		=> 'Tipe untuk query dan mutation tabel Graphics',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'graphics_engine'	=> 	[
				'name' 	=> 'graphics_engine',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'video_output'	=> 	[
				'name' 	=> 'video_output',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}