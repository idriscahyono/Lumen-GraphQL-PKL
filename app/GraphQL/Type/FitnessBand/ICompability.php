<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Compability;

class ICompability extends Mutation
{
	protected $attributes = [
		'name'				=> 'ICompability',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Compability');
	}

	public function args()
	{
		return[
			'compatible_os'	            =>	[
								'name' 	=> 'compatible_os', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}

	public function resolve($root, $args)
	{
		$Compability = new Compability();
		$Compability->compatible_os 	= $args['compatible_os'];

		$Compability->save();
		return $Compability;
	}
}