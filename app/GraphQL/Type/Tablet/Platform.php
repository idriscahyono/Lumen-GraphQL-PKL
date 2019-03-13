<?php
namespace App\GraphQL\Type\Tablet;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Platform extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'TabletPlatform',
		'description' 		=> 'Tipe untuk query dan mutation tabel Platform Tablet',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'system_chip'	=> 	[
				'name' 	=> 'system_chip',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'processor'	=> 	[
				'name' 	=> 'processor',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'gpu'	=> 	[
				'name' 	=> 'gpu',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'memory'	=> 	[
				'name' 	=> 'memory',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'internal_storage'	=> 	[
				'name' 	=> 'internal_storage',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'storage_expansion'	=> 	[
				'name' 	=> 'storage_expansion',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'os'	=> 	[
				'name' 	=> 'os',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
}