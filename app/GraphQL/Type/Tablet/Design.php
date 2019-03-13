<?php
namespace App\GraphQL\Type\Tablet;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Design extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'TabletDesign',
		'description' 		=> 'Tipe untuk query dan mutation tabel Design Tablet',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'dimensions'	=> 	[
				'name' 	=> 'dimensions',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'weight'	=> 	[
				'name' 	=> 'weight',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'materials'	=> 	[
				'name' 	=> 'materials',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'biometrics'	=> 	[
				'name' 	=> 'biometrics',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'colors'	=> 	[
				'name' 	=> 'colors',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}