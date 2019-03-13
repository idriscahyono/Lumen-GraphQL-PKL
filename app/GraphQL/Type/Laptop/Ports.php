<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Ports extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Ports',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'sd_card_reader'	=> 	[
								'name' 	=> 'sd_card_reader', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'headphone_jack'	=> 	[
								'name' 	=> 'headphone_jack', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'usb'	=> 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'microphone_Jack'	=> 	[
								'name' 	=> 'microphone_Jack', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}