<?php

namespace App\GraphQL\Type\Lens;

use \GraphQL\Type\Definition\Type;
use GraphQL;
use Folklore\GraphQL\Support\Mutation;
use App\Performance;

class IPerformanceLens extends Mutation
{
	protected $attributes = [
		'name'				=> 'IPerformanceLens',
	];
	// protected $inputObject = true;

      public function type()
      {
          return GraphQL::type('PerformanceLens');
      }

	public function args()
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
                  'optical_design'	      =>	[
                              'name' 	=> 'optical_design', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
                  'diaphragm_blades'=>	[
                              'name' 	=> 'diaphragm_blades', 		
                              'type' 	=> Type::nonNull(Type::string()),
                  ],
		];
      }
      
      public function resolve($root, $args)
      {
            $Performance = new Performance();
            $Performance->focal_length          = $args['focal_length'];
            $Performance->aperture              = $args['aperture'];
            $Performance->camera_mount_type     = $args['camera_mount_type'];
            $Performance->format_compability    = $args['format_compability'];
            $Performance->angle_of_view         = $args['angle_of_view'];
            $Performance->minimum_focus_distance= $args['minimum_focus_distance'];
            $Performance->magnification         = $args['magnification'];
            $Performance->maximum_reproduction_ratio = $args['maximum_reproduction_ratio'];
            $Performance->optical_design        = $args['optical_design'];
            $Performance->diaphragm_blades      = $args['diaphragm_blades'];
              
            $Performance->save();
            return $Performance;
  
      }
}