<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IPerformance extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPerformance',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	public function type()
    {
        return GraphQL::type('Performance');
	}

	public function args()
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

	public function resolve($root, $args)
    {
        
        $performance = new Performance();
        $performance->clockspeed = $args['clockspeed'];
		$performance->graphic_processor = $args['graphic_processor'];
		$performance->processor = $args['processor'];
		
        
        $saved = $performance->save();
        return $performance;
    }
}