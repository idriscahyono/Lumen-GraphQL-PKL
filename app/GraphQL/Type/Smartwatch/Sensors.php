<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Sensors extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Sensors',
		'description' 		=> 'Tipe untuk query dan mutation tabel computing_systems',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'accelerometer'	=> 	[
				'name' 	=> 'accelerometer',
				'type' 	=> Type::nonNull(Type::boolean()),
			]
		];
	}
}