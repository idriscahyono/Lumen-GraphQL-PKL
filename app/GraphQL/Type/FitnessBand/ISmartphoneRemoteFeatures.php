<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\SmartphoneRemoteFeature;

class ISmartphoneRemoteFeatures extends Mutation
{
	protected $attributes = [
		'name'				=> 'ISmartphoneRemoteFeatures',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('SmartphoneRemoteFeatures');
	}

	public function args()
	{
		return[
			'find_my_phone'	=>	[
								'name' 	=> 'find_my_phone', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
			'music_control'	=>	[
								'name' 	=> 'music_control', 		
								'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
	}

	public function resolve($root, $args)
	{
		$SmartphoneRemoteFeatures = new SmartphoneRemoteFeatures();
		$SmartphoneRemoteFeatures->find_my_phone 	= $args['find_my_phone'];
		$SmartphoneRemoteFeatures->music_control 	= $args['music_control'];

		$SmartphoneRemoteFeatures->save();
		return $SmartphoneRemoteFeatures;
	}
}