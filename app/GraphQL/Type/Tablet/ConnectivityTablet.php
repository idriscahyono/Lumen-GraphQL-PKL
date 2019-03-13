<?php

namespace App\GraphQL\Type\Tablet;


use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ConnectivityTablet extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'ConnectivityTablet',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'bluetooth'	    =>	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'wi_fi'			=>	[
                                'name' 	=> 'wi_fi', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'usb'	        =>	[
                                'name' 	=> 'usb', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'gps'	        =>	[
                                'name' 	=> 'gps', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'other'	        =>	[
                                'name' 	=> 'other', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}
}