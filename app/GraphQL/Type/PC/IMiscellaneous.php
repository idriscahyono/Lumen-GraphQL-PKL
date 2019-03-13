<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_miscellaneous;

class IMiscellaneous extends Mutation
{
    protected $attributes = [
        'name' => 'IMiscellaneous',
        'description' => 'Mutasi untuk menambah Jenis Miscellaneous'
    ];

    public function type()
    {
        return GraphQL::type('Miscellaneous');
    }

    public function args()
    {
        return [
			'supported_os'	=> 	[
				'name' 	=> 'supported_os',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'accessories'	=> 	[
				'name' 	=> 'accessories',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $misc = new Pc_miscellaneous();
        $misc->supported_os = $args['supported_os'];
        $misc->accessories = $args['accessories'];
        
        $saved = $misc->save();
        return $misc;
    }
}