<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Display extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'SmartwatchDisplay',
		'description' 		=> 'Tipe untuk query dan mutation tabel Design',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'display_tecnology'	=> 	[
				'name' 	=> 'display_tecnology',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'screen_size'	=> 	[
				'name' 	=> 'screen_size',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'screen_resolution'	=> 	[
				'name' 	=> 'screen_resolution',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'touch_sreen'	=> 	[
				'name' 	=> 'touch_sreen',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'pixel_density_sharpness'	=> 	[
				'name' 	=> 'pixel_density_sharpness',
				'type' 	=> Type::nonNull(Type::int()),
			],
		];
	}
}