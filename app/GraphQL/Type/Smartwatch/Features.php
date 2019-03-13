<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Features extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'SmartwatchFeatures',
		'description' 		=> 'Tipe untuk query dan mutation tabel SmartwatchFeatures',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'alarm_clock'	=> 	[
				'name' 	=> 'alarm_clock',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'reminder'	=> 	[
				'name' 	=> 'reminder',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'stopwatch'	=> 	[
				'name' 	=> 'stopwatch',
				'type' 	=> Type::nonNull(Type::boolean()),
			]
		];
	}
}