<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IConnectivity extends Mutation
{
	protected $attributes = [
		'name'		=> 'IConnectivity',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Connectivity');
	}
	public function args()
	{
		return [
			'wifi'		=> 	[
								'name' 	=> 'wifi', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'bluetooth'	 => 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'usb' 	    => 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
                            
            'hdmi' 	    => 	[
								'name' 	=> 'hdmi', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'nfc'	    => 	[
								'name' 	=> 'nfc', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}

	public function resolve($root, $args)
    {
        
        $connectivity = new Connectivity();
        $connectivity->wifi = $args['wifi'];
		$connectivity->bluetooth = $args['bluetooth'];
		$connectivity->usb = $args['usb'];
		$connectivity->hdmi = $args['hdmi'];
		$connectivity->nfc = $args['nfc'];
	
		
        
        $saved = $connectivity->save();
        return $connectivity;
    }
}
