<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Ruggednes;

class IRuggedness extends Mutation
{
	protected $attributes = [
		'name'				=> 'IRuggedness',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Ruggedness');
	}
	
	public function args()
	{
		return[
			'water_resistance'	        =>	[
								'name' 	=> 'water_resistance', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}

	public function resolve($root, $args)
	{
		$Ruggedness = new Ruggedness();
		$Ruggedness->water_resistance 		        = $args['water_resistance'];

		$Ruggedness->save();
		return $Ruggedness;
	}
}