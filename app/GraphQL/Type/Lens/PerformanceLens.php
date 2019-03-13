<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Type as GraphQLType;

class PerformanceLens extends GraphQLType
{
	protected $attributes = [
		'name'				=> 'PerformanceLens',
	];
	// protected $inputObject = true;

	public function fields()
	{
		return[
		      'focal_length'	      =>	[
				      'name' 	=> 'focal_length', 		
			            'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'aperture'              =>	[
                              'name' 	=> 'aperture', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'camera_mount_type'     =>	[
                              'name' 	=> 'camera_mount_type', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'format_compability'    =>	[
                              'name' 	=> 'format_compability', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'angle_of_view'         =>	[
                              'name' 	=> 'angle_of_view', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'minimum_focus_distance'=>	[
                              'name' 	=> 'minimum_focus_distance', 		
                              'type' 	=> Type::nonNull(Type::int()),
                  ],
                  'magnification'	      =>	[
                              'name' 	=> 'magnification', 		
                              'type' 	=> Type::nonNull(Type::int()),
                  ],
                  'maximum_reproduction_ratio'=>	[
                              'name' 	=> 'maximum_reproduction_ratio', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'magnification'	      =>	[
                              'name' 	=> 'magnification', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'maximum_reproduction_ratio'=>	[
                              'name' 	=> 'maximum_reproduction_ratio', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
		];
	}
}