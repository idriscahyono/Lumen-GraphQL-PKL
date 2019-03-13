<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IDesignCamera extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDesignCamera',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('DesignCamera');
	}
	public function fields()
	{
		return [
			'dimensions'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'weight'	    => 	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::integer()),
                            ],
            'rugged' 	    => 	[
								'name' 	=> 'rugged', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'available_color_options' 	    => 	[
								'name' 	=> 'available_color_options', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
	public function resolve($root, $args)
    {
        
        $design = new Design();
        $design->dimensions = $args['dimensions'];
		$design->weight = $args['weight'];
		$design->rugged = $args['rugged'];
		$design->available_color_options = $args['available_color_options'];
		
        
        $saved = $design->save();
        return $design;
    }
}
