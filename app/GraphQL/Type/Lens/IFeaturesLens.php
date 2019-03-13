<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use App\Features;

class IFeaturesLens extends Mutation
{
	protected $attributes = [
		'name'				=> 'IFeaturesLens',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('FeaturesLens');
	}
	
	public function args()
	{
		return[
			'autofocus'	        =>	[
								'name' 	=> 'autofocus', 		
								'type' 	=> Type::nonNull(Type::boolean()),
            ],
		];
	}

	public function resolve($root, $args)
    {
        $Features = new Features();
		$Features->autofocus    = $args['autofocus'];
		
		$Features->save();
		return $Features;

    }
}