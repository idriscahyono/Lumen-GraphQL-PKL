<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Ports extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Ports',
		'description' 		=> 'Tipe untuk query dan mutation tabel Ports',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'audio'	=> 	[
				'name' 	=> 'audio',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'usb_port'	=> 	[
				'name' 	=> 'usb_port',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'lan'	=> 	[
				'name' 	=> 'lan',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'antenna'	=> 	[
				'name' 	=> 'antenna',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'wifi'	=> 	[
				'name' 	=> 'wifi',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'bluetooth'	=> 	[
				'name' 	=> 'bluetooth',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'legacy_io'	=> 	[
				'name' 	=> 'legacy_io',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'cir_infrared_port'	=> 	[
				'name' 	=> 'cir_infrared_port',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'thunderbolt'	=> 	[
				'name' 	=> 'thunderbolt',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
	}
}