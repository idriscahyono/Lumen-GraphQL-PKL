<?php
namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use APP\Connectivity;

class IConnectivityPowerBank extends Mutation
{
	protected $attributes = [
		'name'				=> 'IConnectivityPowerBank',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('Connectivity');
	}

	public function args()
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

	public function resolve($root, $args)
    {
        $Connectivity = new Connectivity();
		$Connectivity->output_ports    		= $args['output_ports'];
		$Connectivity->connector_type    	= $args['connector_type'];
		
		$Connectivity->save();
		return $Connectivity;
    }
}