<?php
namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ConnectivityPowerBank extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'ConnectivityPowerBank',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
			'output_ports'	=>	[
								'name' 	=> 'output_ports', 		
								'type' 	=> Type::nonNull(Type::int()),
            ],
            'connector_type'	=>	[
                                'name' 	=> 'connector_type', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}
}