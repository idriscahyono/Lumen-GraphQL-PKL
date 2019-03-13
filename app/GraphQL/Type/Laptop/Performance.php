<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Performance extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'Performance',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'clockspeed'	=> 	[
								'name' 	=> 'clockspeed', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'graphic_processor'	=> 	[
								'name' 	=> 'graphic_processor', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'processor'	=> 	[
								'name' 	=> 'processor', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}