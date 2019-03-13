<?php

namespace App\GraphQL\Type\PC;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Models\PC\Pc_mechanical;

class IMechanical extends Mutation
{
    protected $attributes = [
        'name' => 'IMechanical',
        'description' => 'Mutasi untuk menambah Jenis Mechanical'
    ];

    public function type()
    {
        return GraphQL::type('Mechanical');
    }

    public function args()
    {
        return [
			'kensington_lock'	=> 	[
				'name' 	=> 'kensington_lock',
				'type' 	=> Type::nonNull(Type::boolean()),
			],
			'led_indicators'	=> 	[
				'name' 	=> 'led_indicators',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'power_supply'	=> 	[
				'name' 	=> 'power_supply',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'colling_system'	=> 	[
				'name' 	=> 'colling_system',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'zbox_dimensions'	=> 	[
				'name' 	=> 'zbox_dimensions',
				'type' 	=> Type::nonNull(Type::string()),
			],
			'case_mounting'	=> 	[
				'name' 	=> 'case_mounting',
				'type' 	=> Type::nonNull(Type::string()),
			],
		];
    }

    public function resolve($root, $args)
    {
        
        $mechanical = new Pc_mechanical();
        $mechanical->kensington_lock = $args['kensington_lock'];
        $mechanical->led_indicators = $args['led_indicators'];
        $mechanical->power_supply = $args['power_supply'];
        $mechanical->colling_system = $args['colling_system'];
        $mechanical->zbox_dimensions = $args['zbox_dimensions'];
        $mechanical->case_mounting = $args['case_mounting'];
        
        $saved = $mechanical->save();
        return $mechanical;
    }
}