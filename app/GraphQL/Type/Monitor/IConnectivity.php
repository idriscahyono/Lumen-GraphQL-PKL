<?php

namespace App\GraphQL\Type\Monitor;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;

use App\Models\Monitor\Monitor_connectivity;

class IConnectivity extends Mutation
{
    protected $attributes = [
        'name' => 'IConnectivity',
        'description' => 'Mutasi untuk menambah Jenis Connectivity'
    ];

    public function type()
    {
        return GraphQL::type('Connectivity');
    }

    public function args()
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

    public function resolve($root, $args)
    {
        
        $connectivity = new Monitor_connectivity();
        $connectivity->number_of_dvi_inputs = $args['number_of_dvi_inputs'];
        $connectivity->number_of_hdmi_inputs = $args['number_of_hdmi_inputs'];
        $connectivity->headphone_jack = $args['headphone_jack'];
        $connectivity->number_of_hdmi_outputs = $args['number_of_hdmi_outputs'];
        
        $saved = $connectivity->save();
        return $connectivity;
    }
}