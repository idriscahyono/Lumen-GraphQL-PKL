<?php


namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
class IFlash extends Mutation
{
	protected $attributes = [
		'name'		=> 'IFlash',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Flash');
	}
	public function args()
	{
		return [
			'hot_shoeflash_mount'	=> 	[
								'name' 	=> 'hot_shoeflash_mount', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'lock_buttons'	    => 	[
								'name' 	=> 'lock_buttons', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'flash_features' 	    => 	[
								'name' 	=> 'flash_features', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $flash = new Flash();
        $flash->hot_shoeflash_mount = $args['hot_shoeflash_mount'];
		$flash->lock_buttons = $args['lock_buttons'];
		$flash->flash_features = $args['flash_features'];
	
        
        $saved = $flash->save();
        return $flash;
    }
}
