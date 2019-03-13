<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Monitor\Monitor_general;

class IGeneral extends Mutation
{
    protected $attributes = [
        'name' => 'IGeneral',
        'description' => 'Mutasi untuk menambah Jenis General'
    ];

    public function type()
    {
        return GraphQL::type('General');
    }

    public function args()
    {
        return [
			'operating_system_compability'	=> 	[
								'name' 	=> 'operating_system_compability',
								'type' 	=> Type::nonNull(Type::string()),
							],
			'color'	=> 	[
								'name' 	=> 'color', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
		];
    }

    public function resolve($root, $args)
    {
        
        $general = new Monitor_general();
        $general->operating_system_compability = $args['operating_system_compability'];
        $general->color = $args['color'];
        
        $saved = $general->save();
        return $general;
    }
}