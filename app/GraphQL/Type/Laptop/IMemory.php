<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IMemory extends Mutation
{
	protected $attributes = [
		'name'		=> 'IMemory',
	];
	public function type()
    {
        return GraphQL::type('Memory');
	}

	public function args()
	{
		return [
			'ram_type'	=> 	[
								'name' 	=> 'ram_type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'memory_slots'	=> 	[
								'name' 	=> 'memory_slots', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'ram_speed'	=> 	[
								'name' 	=> 'ram_speed', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'upgradeable'	=> 	[
								'name' 	=> 'upgradeable', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}


	public function resolve($root, $args)
    {
        
        $memory = new Memory();
        $memory->ram_type = $args['ram_type'];
		$memory->memory_slots = $args['memory_slots'];
		$memory->ram_speed = $args['ram_speed'];
		$memory->capacity = $args['capacity'];
		$memory->upgradeable = $args['upgradeable'];
		
        
        $saved = $memory->save();
        return $memory;
    }

	
}
