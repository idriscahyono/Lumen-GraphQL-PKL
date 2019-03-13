<?php

namespace App\GraphQL\Type\Tablet;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\Tablet\Tablet_platform;

class IPlatform extends Mutation
{
    protected $attributes = [
        'name' => 'TabletIPlatform',
        'description' => 'Mutasi untuk menambah Jenis platform'
    ];

    public function type()
    {
        return GraphQL::type('TabletPlatform');
    }

    public function args()
    {
        return [
			'system_chip'	=> 	[
				'name' 	=> 'system_chip',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'processor'	=> 	[
				'name' 	=> 'processor',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'gpu'	=> 	[
				'name' 	=> 'gpu',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'memory'	=> 	[
				'name' 	=> 'memory',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'internal_storage'	=> 	[
				'name' 	=> 'internal_storage',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'storage_expansion'	=> 	[
				'name' 	=> 'storage_expansion',
				'type' 	=> Type::nonNull(Type::int()),
			],
			'os'	=> 	[
				'name' 	=> 'os',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $platform = new Tablet_platform();
        $platform->system_chip = $args['system_chip'];
        $platform->processor = $args['processor'];
        $platform->gpu = $args['gpu'];
        $platform->memory = $args['memory'];
        $platform->internal_storage = $args['internal_storage'];
        $platform->storage_expansion = $args['storage_expansion'];
        $platform->os = $args['os'];
        
        $saved = $platform->save();
        return $platform;
    }
}