<?php

namespace App\GraphQL\Type\FitnessBand;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\FitnessBand\Design;

class IDesignFitnessBand extends Mutation
{
	protected $attributes = [
		'name'				=> 'IDesignFitnessBand',
	];
	// protected $inputObject = true;
	
	public function type()
    {
        return GraphQL::type('DesignFitnessBand');
	}

	public function args()
	{
		return[
			'weight'	    =>	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::int()),
			],
			'interface'	    =>	[
								'name' 	=> 'interface', 		
								'type' 	=> Type::nonNull(Type::string()),
			],
			'clock_face'    =>	[
								'name' 	=> 'clock_face', 		
								'type' 	=> Type::nonNull(Type::string()),
            ],
            'shape_surface'     =>	[
                                'name' 	=> 'shape_surface', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
            'colors'	=>	[
                                'name' 	=> 'colors', 		
                                'type' 	=> Type::nonNull(Type::string()),
            ],
		];
	}

	public function resolve($root, $args)
	{
		$DesignFitnessBand = new DesignFitnessBand();
		$DesignFitnessBand->weight 		= $args['weight'];
		$DesignFitnessBand->interface 		= $args['interface'];
		$DesignFitnessBand->clock_face 	= $args['clock_face'];
		$DesignFitnessBand->shape_surface 	= $args['shape_surface'];
		$DesignFitnessBand->colors 		= $args['colors'];

		$DesignFitnessBand->save();
		return $DesignFitnessBand;
	}

}