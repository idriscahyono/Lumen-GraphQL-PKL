<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Power extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Power',
		'description' 		=> 'Tipe untuk query dan mutation tabel Power',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'power_consumption'	=> 	[
								'name' 	=> 'power_consumption',
								'type' 	=> Type::nonNull(Type::int()),
							],
			'power_saving'	=> 	[
								'name' 	=> 'power_saving', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
		];
	}
}