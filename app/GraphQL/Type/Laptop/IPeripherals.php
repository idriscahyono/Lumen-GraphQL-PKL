<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IPeripherals extends Mutation
{
	protected $attributes = [
		'name'		=> 'IPeripherals',
	];
	public function type()
    {
        return GraphQL::type('Peripherals');
	}
	public function args()
	{
		return [
			'keyboard'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'pointing_device'	=> 	[
								'name' 	=> 'pointing_device', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'optical_drive'	=> 	[
								'name' 	=> 'optical_drive', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'fingerprint_scanner'	=> 	[
								'name' 	=> 'fingerprint_scanner', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $peripherals = new Peripherals();
        $peripherals->dimensions = $args['dimensions'];
		$peripherals->optical_drive = $args['optical_drive'];
		$peripherals->fingerprint_scanner = $args['fingerprint_scanner'];
		
        
        $saved = $peripherals->save();
        return $peripherals;
    }
}
