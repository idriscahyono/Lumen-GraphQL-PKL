<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IDisplayLaptop extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDisplayLaptop',
	];
	public function type()
    {
        return GraphQL::type('DisplayLaptop');
	}

	public function args()
	{
		return [
			'type'	=> 	[
								'name' 	=> 'type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'resolution'	=> 	[
								'name' 	=> 'resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'touchscreen'	=> 	[
								'name' 	=> 'touchscreen', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'features'	=> 	[
								'name' 	=> 'features', 		
								'type' 	=> Type::nonNull(Type::String()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $DisplayLaptop = new DisplayLaptop();
        $DisplayLaptop->type = $args['type'];
		$DisplayLaptop->resolution = $args['resolution'];
		$DisplayLaptop->touchscreen = $args['touchscreen'];
		$DisplayLaptop->features = $args['features'];
		
        
        $DisplayLaptop->save();
        return $DisplayLaptop;
    }
}
