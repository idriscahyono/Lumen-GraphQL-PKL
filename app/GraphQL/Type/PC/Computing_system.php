<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Computing_system extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Computing_system',
		'description' 		=> 'Tipe untuk query dan mutation tabel computing_systems',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'processor'	=> 	[
				'name' 	=> 'processor',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'chipset'	=> 	[
				'name' 	=> 'chipset',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'system_memory'	=> 	[
				'name' 	=> 'system_memory',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}