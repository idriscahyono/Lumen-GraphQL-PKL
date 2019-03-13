<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Mechanical extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Mechanical',
		'description' 		=> 'Tipe untuk query dan mutation tabel Graphics',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'kensington_lock'	=> 	[
				'name' 	=> 'kensington_lock',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'led_indicators'	=> 	[
				'name' 	=> 'led_indicators',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'power_supply'	=> 	[
				'name' 	=> 'power_supply',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'colling_system'	=> 	[
				'name' 	=> 'colling_system',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'zbox_dimensions'	=> 	[
				'name' 	=> 'zbox_dimensions',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'case_mounting'	=> 	[
				'name' 	=> 'case_mounting',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}