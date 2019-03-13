<?php
namespace App\GraphQL\Type\Tablet;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Display extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'TabletDisplay',
		'description' 		=> 'Tipe untuk query dan mutation tabel Display Tablet',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'display_size'	=> 	[
				'name' 	=> 'display_size',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'resolution'	=> 	[
				'name' 	=> 'resolution',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'pixel_density'	=> 	[
				'name' 	=> 'pixel_density',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'technology'	=> 	[
				'name' 	=> 'technology',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'screen_to_body_ratio'	=> 	[
				'name' 	=> 'screen_to_body_ratio',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'features'	=> 	[
				'name' 	=> 'features',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}