<?php
namespace App\GraphQL\Type\Smartwatch;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Connectivity extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'SmartwatchConnectivity',
		'description' 		=> 'Tipe untuk query dan mutation tabel Connectivity',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'bluetooth'	=> 	[
				'name' 	=> 'bluetooth',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'usb_connectivity'	=> 	[
				'name' 	=> 'usb_connectivity',
				'type' 	=> Type::nonNull(Type::boolean()),
			]
		];
	}
}