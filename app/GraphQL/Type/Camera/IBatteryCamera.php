<?php
namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IBatteryCamera extends Mutation
{
	protected $attributes = [
		'name'		=> 'IBatteryCamera',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('BatteryCamera');
	}
	
	public function args()
	{
		return [
			'battery_type'	=> 	[
								'name' 	=> 'battery_type', 		
								'type' 	=> Type::nonNull(Type::int()),
							],
			'battery'	    => 	[
								'name' 	=> 'battery', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'no_of_shots' 	=> 	[
								'name' 	=> 'no_of_shots', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'battery_model' 	=> 	[
								'name' 	=> 'battery_model', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $battery = new Battery();
        $battery->battery_type = $args['battery_type'];
		$battery->battery = $args['battery'];
		$battery->no_of_shots = $args['no_of_shots'];
        $battery->battery_model = $args['battery_model'];
        
        $saved = $battery->save();
        return $battery;
    }
}
