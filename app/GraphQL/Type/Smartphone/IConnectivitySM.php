<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IConnectivitySM extends Mutation
{
	protected $attributes = [
		'name'		=> 'IConnectivitySM',
	];
	public function type()
    {
        return GraphQL::type('ConnectivitySM');
	}


	public function args()
	{
		return [
			'bluetooth'	=> 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
            'wi_fi'	=> 	[
								'name' 	=> 'wi_fi', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'usb'	=> 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'gps'	=> 	[
								'name' 	=> 'gps', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'other'	=> 	[
								'name' 	=> 'other', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $connectiviy = new Connectiviy();
        $connectiviy->bluetooth= $args['bluetooth'];
		$connectiviy->wi_fi = $args['wi_fi'];
		$connectiviy->usb = $args['usb'];
		$connectiviy->gps = $args['gps'];
		$connectiviy->other = $args['other'];
		//$connectiviy->main_connectiviy_specification = $args['main_connectiviy_specification'];
		
        
        $saved = $connectiviy->save();
        return $connectiviy;
    }
}
