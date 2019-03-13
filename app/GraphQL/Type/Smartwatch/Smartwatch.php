<?php
namespace App\GraphQL\Type\Smartwatch;

use \GraphQL\Type\Definition\Type;
use \Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Models\Smartwatch\Smartwatch_sensor;
use App\Models\Smartwatch\Smartwatch_activity_tracker;
use App\Models\Smartwatch\Smartwatch_connectivity;
use App\Models\Smartwatch\Smartwatch_design;
use App\Models\Smartwatch\Smartwatch_display;
use App\Models\Smartwatch\Smartwatch_feature;
use App\Models\Smartwatch\Smartwatch_notification;

class Smartwatch extends GraphQLType{
    protected $attributes = [
		'name'				=> 'Smartwatch',
		'description' 		=> 'Tipe untuk query dan mutation tabel Smartwatch',
    ];
    
    public function fields(){
        [
            'id_sensors' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_activity_tracker' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_connectivity' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_design' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_display' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_features' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'id_notifications' => [
                'type' => Type::nonNull(Type::int()),
            ]
        ];
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'sensors' => [
                'type' => Type::listOf(GraphQL::type('Sensors')),
            ],
            'activity_tracker' => [
                'type' => Type::listOf(GraphQL::type('Activity_tracker')),
            ],
            'connectivity' => [
                'type' => Type::listOf(GraphQL::type('SmartwatchConnectivity')),
            ],
            'design' => [
                'type' => Type::listOf(GraphQL::type('SmartwatchDesign')),
            ],
            'display' => [
                'type' => Type::listOf(GraphQL::type('SmartwatchDisplay')),
            ],
            'features' => [
                'type' => Type::listOf(GraphQL::type('SmartwatchFeatures')),
            ],
            'notifications' => [
                'type' => Type::listOf(GraphQL::type('SmartwatchNotifications')),
            ],
        ];
    }

    public function resolveSensorsField($root, $args)
    {
        return Smartwatch_sensor::where('id', $root->id_sensors)->get();
    }

    public function resolveActivityTrackerField($root, $args)
    {
        return Smartwatch_activity_tracker::where('id', $root->id_activity_tracker)->get();
    }

    public function resolveConnectivityField($root, $args)
    {
        return Smartwatch_Connectivity::where('id', $root->id_connectivity)->get();
    }
    
    public function resolveDesignField($root, $args)
    {
        return Smartwatch_design::where('id', $root->id_design)->get();
    }
    public function resolveDisplayField($root, $args)
    {
        return Smartwatch_display::where('id', $root->id_display)->get();
    }
    public function resolveFeaturesField($root, $args)
    {
        return Smartwatch_feature::where('id', $root->id_features)->get();
    }
    public function resolveNotificationsField($root, $args)
    {
        return Smartwatch_notification::where('id', $root->id_)->get();
    }
}
