<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;



class ICellularTablet extends Mutation
{
	protected $attributes = [
		'name'		=> 'ICellularTablet',
	];
	public function type()
    {
        return GraphQL::type('CellularTablet');
	}

	public function fields()
	{
		return [
			'data'	=> 	[
								'name' 	=> 'data', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'sim_type'	    => 	[
								'name' 	=> 'sim_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'volte' 	=> 	[
								'name' 	=> 'volte', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}
	public function resolve($root, $args)
    {
        
        $cellular = new Cellular();
        $cellular->data = $args['data'];
		$cellular->sim_type = $args['sim_type'];
		$cellular->volte = $args['volte'];
		//$cellular->main_cellular_specification = $args['main_cellular_specification'];
		
        
        $saved = $cellular->save();
        return $cellular;
    }



}
