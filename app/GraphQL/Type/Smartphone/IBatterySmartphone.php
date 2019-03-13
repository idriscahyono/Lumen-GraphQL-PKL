<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IBatterySmartphone extends Mutation
{
	protected $attributes = [
		'name'		=> 'IBatterySmartphone',
	];
	public function type()
    {
        return GraphQL::type('BatterySmartphone');
	}

	public function args()
	{
		return [
			'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'fast_charging'	    => 	[
								'name' 	=> 'fast_charging', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'wireless_charging' 	=> 	[
								'name' 	=> 'wireless_charging', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}


	
	public function resolve($root, $args)
    {
        
        $battery = new Battery();
        $battery->capacity = $args['capacity'];
		$battery->fast_charging = $args['fast_charging'];
		$battery->selfie_battery = $args['selfie_battery'];
		$battery->selfie_battery_specification = $args['selfie_battery_specification'];
		$battery->video_recording = $args['video_recording'];
		//$battery->main_battery_specification = $args['main_battery_specification'];
		
        
        $saved = $battery->save();
        return $battery;
    }
}
