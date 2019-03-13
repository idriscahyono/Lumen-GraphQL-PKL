<?php
namespace App\GraphQL\Type\PC;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Miscellaneous extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Miscellaneous',
		'description' 		=> 'Tipe untuk query dan mutation tabel Miscellaneouses',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'supported_os'	=> 	[
				'name' 	=> 'supported_os',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'accessories'	=> 	[
				'name' 	=> 'accessories',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}