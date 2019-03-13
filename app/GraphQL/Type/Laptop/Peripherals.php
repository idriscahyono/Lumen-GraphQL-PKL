<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Peripherals extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Peripherals',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'keyboard'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'pointing_device'	=> 	[
								'name' 	=> 'pointing_device', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'optical_drive'	=> 	[
								'name' 	=> 'optical_drive', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'fingerprint_scanner'	=> 	[
								'name' 	=> 'fingerprint_scanner', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
		];
	}
}
