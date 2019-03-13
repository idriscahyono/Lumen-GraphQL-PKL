<?php

namespace App\GraphQL\Type\Tablet;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IBatteryTablet extends Mutation
{
	protected $attributes = [
		'name'		=> 'IBatteryTablet',
	];
	public function type()
    {
        return GraphQL::type('BatteryTablet');
	}

	public function fields()
	{
		return [
			'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'fast_charging'	    => 	[
								'name' 	=> 'fast_charging', 		
								'type' 	=> Type::nonNull(Type::number()),
                            ],
            'wireless_charging' 	=> 	[
								'name' 	=> 'wireless_charging', 		
								'type' 	=> Type::nonNull(Type::bool()),
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
