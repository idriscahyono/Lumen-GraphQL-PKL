<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IGeneral extends Mutation
{
	protected $attributes = [
		'name'		=> 'IGeneral',
	];
	//protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('General');
	}

	public function args()
	{
		return [
			'dimensions'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'operating_system'	=> 	[
								'name' 	=> 'operating_system', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'weight'	=> 	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'colors'	=> 	[
								'name' 	=> 'colors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $general = new General();
        $general->dimensions = $args['dimensions'];
		$general->operating_system = $args['operating_system'];
		$general->weight = $args['weight'];
		$general->colors = $args['colors'];
		
        
        $saved = $general->save();
        return $general;
    }
}
