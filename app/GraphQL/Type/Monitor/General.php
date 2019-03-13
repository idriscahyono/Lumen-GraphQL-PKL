<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class General extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'General',
		'description' 		=> 'Tipe untuk query dan mutation tabel General',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'operating_system_compability'	=> 	[
								'name' 	=> 'operating_system_compability',
								'type' 	=> Type::nonNull(Type::string()),
							],
			'color'	=> 	[
								'name' 	=> 'color', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
		];
	}
}