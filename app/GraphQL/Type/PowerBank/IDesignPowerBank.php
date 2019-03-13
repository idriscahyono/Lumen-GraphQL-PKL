<?php

namespace App\GraphQL\Type\PowerBank;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;

use APP\DesignPowerBank;

class IDesignPowerBank extends Mutation
{
	protected $attributes = [
		'name'				=> 'IDesignPowerBank',
	];
	// protected $inputObject = true;

  public function type()
	{
		return GraphQL::type('DesignPowerBank');
  }
  
	public function args()
	{
		return[
            'colors'	=>	[
                      'name' 	=> 'colors', 		
                      'type' 	=> Type::nonNull(Type::string()),
            ],
            'shapeform_factor'	=>	[
                        'name' 	=> 'shapeform_factor', 		
                        'type' 	=> Type::nonNull(Type::string()),
            ],
            'weight'	=>	[
                        'name' 	=> 'weight', 		
                        'type' 	=> Type::nonNull(Type::int()),
            ],
            'dimensions'	=>	[
                        'name' 	=> 'dimensions', 		
                        'type' 	=> Type::nonNull(Type::int()),
            ]
		];
  }
  
  public function resolve($root, $args)
    {
        $DesignPowerBank = new DesignPowerBank();
        $DesignPowerBank->colors    		        = $args['colors'];
        $DesignPowerBank->shapeform_factor    	= $args['shapeform_factor'];
        $DesignPowerBank->weight    	          = $args['weight'];
        $DesignPowerBank->dimensions    	      = $args['dimensions'];
        
        $DesignPowerBank->save();
        return $DesignPowerBank;
    }
}