<?php

namespace App\GraphQL\Type\Smartphone;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Model\Smartphone\Battery;  
use App\Model\Smartphone\Camera; 
use App\Model\Smartphone\Design;
use App\Model\Smartphone\Cellular; 
use App\Model\Smartphone\Connectivity;
use App\Model\Smartphone\Display; 
use App\Model\Smartphone\Features; 
use App\Model\Smartphone\Platform;
use App\Model\Smartphone\Multimedia; // tabel

class Smartphone extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Smartphone'
	];
	//protected $inputObject = true;

	public function fields()
    {
        return [
            'battery' => [
              'type' => Type::listOf(GraphQL::type('BatterySmartphone')),
            ],
            'camera' => [
                'type' => Type::listOf(GraphQL::type('Camera')),
              ],
              'cellular' => [
                'type' => Type::listOf(GraphQL::type('CellularSM')),
              ],
              'connectivity' => [
                'type' => Type::listOf(GraphQL::type('ConnectivitySM')),
              ],
              'display' => [
                'type' => Type::listOf(GraphQL::type('DisplaySmartphone')),
              ],
              'design' => [
                'type' => Type::listOf(GraphQL::type('DesignSmartphone')),
              ],
              'features' => [
                'type' => Type::listOf(GraphQL::type('Features')),
              ],
              'platform' => [
                'type' => Type::listOf(GraphQL::type('PlatformSM')),
              ],
              'multimedia' => [
                'type' => Type::listOf(GraphQL::type('MultimediaSM')),
              ],
        ];

        //untuk getID
        [
          'id_battery' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_camera' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_display' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_connectivity' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_platform' => [
            'type' => Type::nonNull(Type::int()),
          ],
          'id_design' => [
               'type' => Type::nonNull(Type::int()),
          ],
          'id_features' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_cellular'=> [
              'type' => Type::nonNull(Type::int()),
          ],'id_multimedia'=> [
            'type' => Type::nonNull(Type::int()),
        ]
      ];
    }

    
    
    //reslove



     //resolve yang di sini untuk mendapatkan nilai dari IDisplay
     public function resolveBatteryField($root, $args)
     {
         //return Video::all();
         return Battery::where('id', $root->id_battery)->get();
    
     }

     public function resolveCameraField($root, $args)
     {
        return Camera::where('id', $root->id_camera)->get();
    
     }

     public function resolveDisplayField($root, $args)
     {
           return Display::where('id', $root->id_display)->get();
    
     }

     public function resolvePlatfomField($root, $args)
     {
         return Platform::where('id', $root->id_platform)->get();
    
     }

     public function resolveConnectivityField($root, $args)
     {
         return Connectivity::where('id', $root->id_connectivity)->get();
    
     }

     public function resolveExposureField($root, $args)
     {
          return Exposure::where('id', $root->id_exposure)->get();
    
     }

     public function resolveDesignField($root, $args)
     {
        return Design::where('id', $root->id_design)->get();
    
     }

     public function resolveFeaturesField($root, $args)
     {
         return Features::where('id', $root->id_features)->get();
    
     }
     public function resolveCellularField($root, $args)
     {
          return Cellular::where('id', $root->id_cellular)->get();
    
     }

     public function resolveMultimediaField($root, $args)
     {
         return Multimedia::where('id', $root->id_multimedia)->get();
    
     }
}

