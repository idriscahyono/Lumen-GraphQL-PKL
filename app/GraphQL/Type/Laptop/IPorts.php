<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IPorts extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPorts',
	];

	/*
	* Uncomment following line to make the type input object.
	* http://graphql.org/learn/schema/#input-types
	*/
	public function type()
    {
        return GraphQL::type('Ports');
	}

	public function args()
	{
		return [
			'sd_card_reader'	=> 	[
								'name' 	=> 'sd_card_reader', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
			'headphone_jack'	=> 	[
								'name' 	=> 'headphone_jack', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'usb'	=> 	[
								'name' 	=> 'usb', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'microphone_Jack'	=> 	[
								'name' 	=> 'microphone_Jack', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $ports = new Ports();
        $ports->headphone_jack = $args['headphone_jack'];
		$ports->usb = $args['usb'];
		$ports->microphone_Jack = $args['microphone_Jack'];
		
        
        $saved = $ports->save();
        return $ports;
    }
}