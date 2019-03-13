<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ConnectivityLP extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'ConnectivityLP',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'wireless_lan'	=> 	[
								'name' 	=> 'wireless_lan', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
            'bluetooth'	=> 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'bluetooth_features'	=> 	[
								'name' 	=> 'bluetooth_features', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
