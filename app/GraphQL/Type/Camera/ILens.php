<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
class ILens extends Mutation
{
	protected $attributes = [
		'name'		=> 'ILens',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Lens');
	}
    public function args()
	{
		return [
			'focal_length'	=> 	[
								'name' 	=> 'focal_length', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'lens_type'	    => 	[
								'name' 	=> 'lens_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'mount' 	    => 	[
								'name' 	=> 'mount', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $lens = new Lens();
        $lens->focal_length = $args['focal_length'];
		$lens->lens_type = $args['lens_type'];
		$lens->mount = $args['mount'];
		
        
        $saved = $lens->save();
        return $lens;
    }

}
