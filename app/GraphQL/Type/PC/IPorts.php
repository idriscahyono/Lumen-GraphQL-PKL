<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_port;

class IPorts extends Mutation
{
    protected $attributes = [
        'name' => 'IPorts',
        'description' => 'Mutasi untuk menambah Jenis Port'
    ];

    public function type()
    {
        return GraphQL::type('Ports');
    }

    public function args()
    {
        return [
			'audio'	=> 	[
				'name' 	=> 'audio',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'usb_port'	=> 	[
				'name' 	=> 'usb_port',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'lan'	=> 	[
				'name' 	=> 'lan',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'antenna'	=> 	[
				'name' 	=> 'antenna',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'wifi'	=> 	[
				'name' 	=> 'wifi',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'bluetooth'	=> 	[
				'name' 	=> 'bluetooth',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'legacy_io'	=> 	[
				'name' 	=> 'legacy_io',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'cir_infrared_port'	=> 	[
				'name' 	=> 'cir_infrared_port',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'thunderbolt'	=> 	[
				'name' 	=> 'thunderbolt',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $port = new Pc_port();
        $port->audio = $args['audio'];
        $port->usb_port = $args['usb_port'];
        $port->lan = $args['lan'];
        $port->antenna = $args['antenna'];
        $port->wifi = $args['wifi'];
        $port->bluetooth = $args['bluetooth'];
        $port->legacy_io = $args['legacy_io'];
        $port->cir_infrared_port = $args['cir_infrared_port'];
        $port->thunderbolt = $args['thunderbolt'];
        
        $saved = $port->save();
        return $port;
    }
}