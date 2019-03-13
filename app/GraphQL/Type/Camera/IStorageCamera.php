<?php
namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Model\Camera\Storage;  

class IStorageCamera extends Mutation
{
	protected $attributes = [
		'name'		=> 'IStorageCamera',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('StorageCamera');
	}
	public function args()
	{
		return [
			'storage_file_system'	=> 	[
								'name' 	=> 'storage_file_system', 		
								'type' 	=> Type::nonNull(Type::string()),
							]
		];
	}

	public function resolve($root, $args)
    {
        
        $StorageCamera = new StorageCamera();
        $StorageCamera->storage_file_system = $args['storage_file_system'];

        
        $StorageCamera->save();
        return $StorageCamera;
    }

}
