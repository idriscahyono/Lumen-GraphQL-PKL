<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_computing_system;

class IComputing_system extends Mutation
{
    protected $attributes = [
        'name' => 'IComputing_system',
        'description' => 'Mutasi untuk menambah Jenis Computing_system'
    ];

    public function type()
    {
        return GraphQL::type('Computing_system');
    }

    public function args()
    {
        return [
			'processor'	=> 	[
				'name' 	=> 'processor',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'chipset'	=> 	[
				'name' 	=> 'chipset',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'system_memory'	=> 	[
				'name' 	=> 'system_memory',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $computing_system = new Pc_computing_system();
        $computing_system->processor = $args['processor'];
        $computing_system->chipset = $args['chipset'];
        $computing_system->system_memory = $args['system_memory'];
        
        $saved = $computing_system->save();
        return $computing_system;
    }
}