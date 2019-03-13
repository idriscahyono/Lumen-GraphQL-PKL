<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

use APP\CompabilityPowerbank;

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
			'compatible_devices'	=>	[
								'name' 	=> 'compatible_devices', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'compatible_brand'	=>	[
                                'name' 	=> 'compatible_brand', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}

	public function resolve($root, $args)
    {
        $Compability = new Compability();
		$Compability->compatible_devices    = $args['compatible_devices'];
		$Compability->compatible_brand    	= $args['compatible_brand'];
		
		$Compability->save();
		return $Compability;

    }
}