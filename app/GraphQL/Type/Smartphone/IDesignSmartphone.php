<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
class IDesignSmartphone extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDesignSmartphone',
	];
	public function type()
    {
        return GraphQL::type('DesignSmartphone');
	}

	public function args()
	{
		return [
			'dimensions'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'weight'	    => 	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'materials' 	    => 	[
								'name' 	=> 'materials', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'biometrics' 	    => 	[
								'name' 	=> 'biometrics', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'colors' 	    => 	[
								'name' 	=> 'colors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $design = new Design();
        $design->dimensions = $args['dimensions'];
		$design->sim_type = $args['sim_type'];
		$design->weight = $args['weight'];
		$design->materials = $args['materials'];
		$design->biometrics = $args['biometrics'];
		$design->colors = $args['colors'];
		//$design->volte = $args['volte'];
		//$design->main_design_specification = $args['main_design_specification'];
		
        
        $saved = $design->save();
        return $design;
    }

}
