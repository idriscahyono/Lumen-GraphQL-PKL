<?php
namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IExposure extends Mutation
{
	protected $attributes = [
		'name'		=> 'IExposure',
	];
	// protected $inputObject = true;

	public function type()
    {
        return GraphQL::type('Exposure');
	}

	public function args()
	{
		return [
			'exposure_lock'	    => 	[
								'name' 	=> 'exposure_lock', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'exposure_modes'    => 	[
								'name' 	=> 'exposure_modes', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
		];
	}

	public function resolve($root, $args)
    {
        
        $exposure = new Exposure();
        $exposure->exposure_lock = $args['exposure_lock'];
		$exposure->exposure_modes = $args['exposure_modes'];
	
		
        
        $saved = $exposure->save();
        return $exposure;
    }
}
