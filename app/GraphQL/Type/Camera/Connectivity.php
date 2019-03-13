<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Connectivity extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Connectivity',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'wifi'		=> 	[
								'name' 	=> 'wifi', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'bluetooth'	 => 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'usb' 	    => 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
                            
            'hdmi' 	    => 	[
								'name' 	=> 'hdmi', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'nfc'	    => 	[
								'name' 	=> 'nfc', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}
}
