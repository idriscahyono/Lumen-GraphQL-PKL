<?php
namespace App\GraphQL\Type\Monitor;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class Dimension extends GraphQLType{
    
    protected $attributes = [
		'name'				=> 'Dimension',
		'description' 		=> 'Tipe untuk query dan mutation tabel Dimension',
    ];
    
    // protected $inputObject = true;

	public function fields()
	{
		return [
			'width'	=> 	[
								'name' 	=> 'width',
								'type' 	=> Type::nonNull(Type::int()),
							],
			'depth'	=> 	[
								'name' 	=> 'depth', 		
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'weight'	=> 	[
								'name' 	=> 'weight',
								'type' 	=> Type::nonNull(Type::int()),
                            ],
            'stand_included'	=> 	[
								'name' 	=> 'stand_included',
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
		];
	}
}