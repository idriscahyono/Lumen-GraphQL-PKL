<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Storage extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Storage',
		'description' 		=> 'Tipe untuk query dan mutation tabel Graphics',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'mass_storage'	=> 	[
				'name' 	=> 'mass_storage',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'msata'	=> 	[
				'name' 	=> 'msata',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'm2'	=> 	[
				'name' 	=> 'm2',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'card_reader'	=> 	[
				'name' 	=> 'card_reader',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}