<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_storage;

class IStorage extends Mutation
{
    protected $attributes = [
        'name' => 'IStorage',
        'description' => 'Mutasi untuk menambah Jenis Storage'
    ];

    public function type()
    {
        return GraphQL::type('Storage');
    }

    public function args()
    {
        return [
			'mass_storage'	=> 	[
				'name' 	=> 'mass_storage',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'msata'	=> 	[
				'name' 	=> 'msata',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'm2'	=> 	[
				'name' 	=> 'm2',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'card_reader'	=> 	[
				'name' 	=> 'card_reader',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $storage = new Pc_storage();
        $storage->mass_storage = $args['mass_storage'];
        $storage->msata = $args['msata'];
        $storage->m2 = $args['m2'];
        $storage->card_reader = $args['card_reader'];
        
        $saved = $storage->save();
        return $storage;
    }
}