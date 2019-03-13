<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Syncing;

class ISyncing extends Mutation
{
	protected $attributes = [
		'name'				=> 'ISyncing',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Syncing');
	}

	public function args()
	{
		return[
			'bluetooth'	=>	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'usb_connectivity'	=>	[
								'name' 	=> 'usb_connectivity', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'wireless_protocol'	=>	[
								'name' 	=> 'wireless_protocol', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
		];
	}
	public function resolve($root, $args)
	{
		$Syncing = new Syncing();
		$Syncing->bluetooth 		= $args['bluetooth'];
		$Syncing->usb_connectivity 	= $args['usb_connectivity'];
		$Syncing->wireless_protocol = $args['wireless_protocol'];

		$Syncing->save();
		return $Syncing;
	}
}