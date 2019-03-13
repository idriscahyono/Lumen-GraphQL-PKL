<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use App\Physical;

class IPhysical extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPhysical',
	];
	// protected $inputObject = true;

	public function type()
	{
		return GraphQL::type('Physical');
	}

	public function args()
	{
		return[
			'filter_thread'	=>	[
				'name' 	=> 'filter_thread', 		
				'type' 	=> Type::nonNull(Type::string()),
            ],
            'dimensions' =>	[
                'name' 	=> 'dimensions', 		
                'type' 	=> Type::nonNull(Type::string()),
            ],
            'weight'	        =>	[
                'name' 	=> 'weight', 		
                'type' 	=> Type::nonNull(Type::string()),
            ],        
		];
	}

	public function resolve($root, $args)
	{
		  $Physical = new Physical();
		  $Physical->filter_thread  = $args['filter_thread'];
		  $Physical->dimensions     = $args['dimensions'];
		  $Physical->weight     	= $args['weight'];
			
		  $Physical->save();
		  return $Physical;

	}
}