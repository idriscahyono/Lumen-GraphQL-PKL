<?php

namespace App\GraphQL\Type\Tablet;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

class IConnectivityTablet extends Mutation
{
	protected $attributes = [
		'name'				=> 'IConnectivityTablet',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('Connectivity');
	}

	public function args()
	{

		return[
			'bluetooth'	    =>	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'wi_fi'			=>	[
                                'name' 	=> 'wi_fi', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'usb'	        =>	[
                                'name' 	=> 'usb', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'gps'	        =>	[
                                'name' 	=> 'gps', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'other'	        =>	[
                                'name' 	=> 'other', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ]
		];
	}

	public function resolve($root, $args)
    {
        $Connectivity = new Connectivity();
		$Connectivity->bluetooth    = $args['bluetooth'];
		$Connectivity->wi_fi        = $args['wi_fi'];
        $Connectivity->usb    		= $args['usb'];
        $Connectivity->gps          = $args['gps'];
		$Connectivity->other    	= $args['other'];
	
		$Connectivity->save();
		return $Connectivity;

    }
}