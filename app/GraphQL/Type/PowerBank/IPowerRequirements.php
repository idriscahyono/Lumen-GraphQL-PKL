<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

use APP\PowerRequirements;

class IPowerRequirements extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPowerRequirements',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('PowerRequirements');
	}
	
	public function args()
	{
		return[
			'power_output'	=>	[
								'name' 	=> 'power_output', 		
								'type' 	=> Type::nonNull(Type::int()),
            ],
            'power_input'	=>	[
                                'name' 	=> 'power_input', 		
                                'type' 	=> Type::nonNull(Type::int()),
            ]
		];
	}

	public function resolve($root, $args)
	{
		$Features = new Features();
		$Features->power_output   = $args['power_output'];
		$Features->power_input    = $args['power_input'];
		
		$Features->save();
		return $Features;
	}
}