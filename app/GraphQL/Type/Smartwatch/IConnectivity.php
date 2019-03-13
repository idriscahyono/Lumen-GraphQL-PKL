<?php

namespace App\GraphQL\Type\Smartwatch;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Smartwatch\Smartwatch_connectivity;

class IConnectivity extends Mutation
{
    protected $attributes = [
        'name' => 'SmartwatchIConnectivity',
        'description' => 'Mutasi untuk menambah Jenis SmartwatchConnectivity'
    ];

    public function type()
    {
        return GraphQL::type('SmartwatchConnectivity');
    }

    public function args()
    {
        return [
			'bluetooth'	=> 	[
				'name' 	=> 'bluetooth',
				'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'usb_connectivity'	=> 	[
				'name' 	=> 'usb_connectivity',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $connectivity = new Smartwatch_connectivity();
        $connectivity->bluetooth = $args['bluetooth'];
        $connectivity->usb_connectivity = $args['usb_connectivity'];
        
        $saved = $connectivity->save();
        return $connectivity;
    }
}