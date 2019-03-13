<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Connectivity extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Connectivity',
		'description' 		=> 'Tipe untuk query dan mutation tabel Connectivity',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
            'number_of_dvi_inputs'	=> 	[
                'name' 	=> 'number_of_dvi_inputs',
                'type' 	=> Type::nonNull(Type::int()),
            ],
            'number_of_hdmi_inputs'	=> 	[
                'name' 	=> 'number_of_hdmi_inputs',
                'type' 	=> Type::nonNull(Type::int()),
            ],
            'headphone_jack'	=> 	[
                'name' 	=> 'headphone_jack',
                'type' 	=> Type::nonNull(Type::boolean()),
            ],
            'number_of_hdmi_outputs'	=> 	[
                'name' 	=> 'number_of_hdmi_outputs',
                'type' 	=> Type::nonNull(Type::int()),
            ],
		];
	}
}