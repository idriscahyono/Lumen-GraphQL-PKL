<?php


return [

    /*
     * The prefix for routes
     */
    'prefix' => 'graphql',

    /*
     * The domain for routes
     */
    'domain' => null,

    /*
     * The routes to make GraphQL request. Either a string that will apply
     * to both query and mutation or an array containing the key 'query' and/or
     * 'mutation' with the according Route
     *
     * Example:
     *
     * Same route for both query and mutation
     *
     * 'routes' => [
     *     'query' => 'query/{graphql_schema?}',
     *     'mutation' => 'mutation/{graphql_schema?}',
     *      mutation' => 'graphiql'
     * ]
     *
     * you can also disable routes by setting routes to null
     *
     * 'routes' => null,
     */
    'routes' => '{graphql_schema?}',

    /*
     * The controller to use in GraphQL requests. Either a string that will apply
     * to both query and mutation or an array containing the key 'query' and/or
     * 'mutation' with the according Controller and method
     *
     * Example:
     *
     * 'controllers' => [
     *     'query' => '\Folklore\GraphQL\GraphQLController@query',
     *     'mutation' => '\Folklore\GraphQL\GraphQLController@mutation'
     * ]
     */
    'controllers' => \Folklore\GraphQL\GraphQLController::class.'@query',

    /*
     * The name of the input variable that contain variables when you query the
     * endpoint. Most libraries use "variables", you can change it here in case you need it.
     * In previous versions, the default used to be "params"
     */
    'variables_input_name' => 'variables',

    /*
     * Any middleware for the 'graphql' route group
     */
    'middleware' => [],

    /**
     * Any middleware for a specific 'graphql' schema
     */
    'middleware_schema' => [
        'default' => [],
    ],

    /*
     * Any headers that will be added to the response returned by the default controller
     */
    'headers' => [],

    /*
     * Any JSON encoding options when returning a response from the default controller
     * See http://php.net/manual/function.json-encode.php for the full list of options
     */
    'json_encoding_options' => 0,

    /*
     * Config for GraphiQL (see (https://github.com/graphql/graphiql).
     * To disable GraphiQL, set this to null
     */
    'graphiql' => [
        'routes' => '/graphiql/{graphql_schema?}',
        'controller' => \Folklore\GraphQL\GraphQLController::class.'@graphiql',
        'middleware' => [],
        'view' => 'graphql::graphiql',
        'composer' => \Folklore\GraphQL\View\GraphiQLComposer::class,
    ],

    /*
     * The name of the default schema used when no arguments are provided
     * to GraphQL::schema() or when the route is used without the graphql_schema
     * parameter
     */
    'schema' => 'default',

    /*
     * The schemas for query and/or mutation. It expects an array to provide
     * both the 'query' fields and the 'mutation' fields. You can also
     * provide an GraphQL\Type\Schema object directly.
     *
     * Example:
     *
     * 'schemas' => [
     *     'default' => new Schema($config)
     * ]
     *
     * or
     *
     * 'schemas' => [
     *     'default' => [
     *         'query' => [
     *              'users' => 'App\GraphQL\Query\UsersQuery'
     *          ],
     *          'mutation' => [
     *
     *          ]
     *     ]
     * ]
     */
    'schemas' => [
        'default' => [
            'query' => [
                //query ditulis di sini
                // 'PostQuery' => App\GraphQL\Query\PostQuery::class,
                'MonitorQuery'    => App\GraphQL\Query\MonitorQuery::class,
                'FitnessBandQuery'=> App\GraphQL\Query\FitnessBandQuery::class,
                'LensQuery'       => App\GraphQL\Query\LensQuery::class,
                'PowerBankQuery'  => App\GraphQL\Query\PowerBankQuery::class,
                'PcQuery' => App\GraphQL\Query\PcQuery::class,
                'CameraQuery' => App\GraphQL\Query\CameraQuery::class,
                'SmartwatchQuery' => App\GraphQL\Query\SmartwatchQuery::class,
                'TabletQuery' => App\GraphQL\Query\TabletQuery::class,
                'LaptopQuery' => App\GraphQL\Query\LaptopQuery::class,
                'SmartphoneQuery' => App\GraphQL\Query\SmartphoneQuery::class


            ],
            'mutation' => [
                // 'PostMutation' => App\GraphQL\Mutation\PostMutation::class

                //Fitness Band
                'IAdditionalFeatures'   => App\GraphQL\Type\FitnessBand\IAdditionalFeatures::class,
                'IActivityTracker'      => App\GraphQL\Type\FitnessBand\IActivityTracker::class,
                'IBattery'              => App\GraphQL\Type\FitnessBand\IBattery::class,
                'ICompability'          => App\GraphQL\Type\FitnessBand\ICompability::class,
                'IDesignFitnessBand'    => App\GraphQL\Type\FitnessBand\IDesignFitnessBand::class,
                'IDisplay'              => App\GraphQL\Type\FitnessBand\IDisplay::class,
                'IRuggedness'           => App\GraphQL\Type\FitnessBand\IRuggedness::class,
                'ISensors'              => App\GraphQL\Type\FitnessBand\ISensors::class,
                'ISmartphoneRemoteFeatures'  => App\GraphQL\Type\FitnessBand\ISmartphoneRemoteFeatures::class,
                'ISyncing'              => App\GraphQL\Type\FitnessBand\ISyncing::class,
                'INotifications'        => App\GraphQL\Type\FitnessBand\INotifications::class,

                //Lens
                'IFeaturesLens'             => App\GraphQL\Type\Lens\IFeaturesLens::class,
                'IPackagingInfo'        => App\GraphQL\Type\Lens\IPackagingInfo::class,
                'IPerformanceLens'          => App\GraphQL\Type\Lens\IPerformanceLens::class,
                'IPhysical'             => App\GraphQL\Type\Lens\IPhysical::class,

                //Power Bank
                'IBatteryCharging'       => App\GraphQL\Type\PowerBank\IBatteryCharging::class,
                'ICompability'           => App\GraphQL\Type\PowerBank\ICompability::class,
                'IConnectivityPowerBank'          => App\GraphQL\Type\PowerBank\IConnectivityPowerBank::class,
                'IDesignPowerBank'       => App\GraphQL\Type\PowerBank\IDesignPowerBank::class,
                'IFeaturesPowerBank'     => App\GraphQL\Type\PowerBank\IFeaturesPowerBank::class,
                'IPowerRequirements'     => App\GraphQL\Type\PowerBank\IPowerRequirements::class,

                //Tablet
                'IConnectivityTablet'     => App\GraphQL\Type\Tablet\IConnectivityTablet::class,
                'IFeaturesTablet'     => App\GraphQL\Type\Tablet\IFeaturesTablet::class,
                'IMultimedia'     => App\GraphQL\Type\Tablet\IMultimedia::class,
                'IDisplayTablet' => App\GraphQL\Type\Tablet\IDisplayTablet::class,
                'TabletICamera' => App\GraphQL\Type\Tablet\ICamera::class,
                'IDesignTablet' => App\GraphQL\Type\Tablet\IDesignTablet::class,
                'TabletIPlatform' => App\GraphQL\Type\Tablet\IPlatform::class,

                //Camera
                'IVideoCamera'    => App\GraphQL\Type\Camera\IVideoCamera::class,
                'IStorageCamera'   => App\GraphQL\Type\Camera\IStorageCamera::class,
                'ILens'      => App\GraphQL\Type\Camera\ILens::class,
                'IBatteryCamera'   => App\GraphQL\Type\Camera\IBatteryCamera::class,
                'IConnectivity'   => App\GraphQL\Type\Camera\IConnectivity::class,
                'IExposure'   => App\GraphQL\Type\Camera\IExposure::class,
                'IDesignCamera'   => App\GraphQL\Type\Camera\IDesignCamera::class,
                'IFeatures'   => App\GraphQL\Type\Camera\IFeatures::class,
                'ISensor'   => App\GraphQL\Type\Camera\ISensor::class,

                // 'Laptop'    => App\GraphQL\Type\Laptop\Laptop::class,
                'IGeneral'    => App\GraphQL\Type\Laptop\IGeneral::class,
                'IDisplayLaptop'    => App\GraphQL\Type\Laptop\IDisplayLaptop::class,
                'IConnectivityLP'    => App\GraphQL\Type\Laptop\IConnectivityLP::class,
                'IMemory'    => App\GraphQL\Type\Laptop\IMemory::class,
                'IMultimediaLP'    => App\GraphQL\Type\Laptop\IMultimediaLP::class,
                'IPerformance'    => App\GraphQL\Type\Laptop\IPerformance::class,
                'IPeripherals'    => App\GraphQL\Type\Laptop\IPeripherals::class,
                'IPorts'    => App\GraphQL\Type\Laptop\IPorts::class,
                'IStorage'    => App\GraphQL\Type\Laptop\IStorage::class,

                // 'Smartphone'        => App\GraphQL\Type\Smartphone\Smartphone::class,
                'ICellularSM'      => App\GraphQL\Type\Smartphone\ICellular::class,
                'ICameraSM'        => App\GraphQL\Type\Smartphone\ICamera::class,
                'IBatterySmartphone'       => App\GraphQL\Type\Smartphone\IBatterySmartphone::class,
                'IConnectivitySM'  => App\GraphQL\Type\Smartphone\IConnectivitySM::class,
                'IDisplaySmartphone'       => App\GraphQL\Type\Smartphone\IDisplaySmartphone::class,
                'IDesignSmartphone'        => App\GraphQL\Type\Smartphone\IDesignSmartphone::class,
                'IFeaturesSM'      => App\GraphQL\Type\Smartphone\IFeatures::class,
                'IMultimediaSM'    => App\GraphQL\Type\Smartphone\IMultimediaSM::class,
                'IPlatfromSM'     => App\GraphQL\Type\Smartphone\IPlatform::class

            ]
        ]
    ],

    /*
     * Additional resolvers which can also be used with shorthand building of the schema
     * using \GraphQL\Utils::BuildSchema feature
     *
     * Example:
     *
     * 'resolvers' => [
     *     'default' => [
     *         'echo' => function ($root, $args, $context) {
     *              return 'Echo: ' . $args['message'];
     *          },
     *     ],
     * ],
     */
    'resolvers' => [
        'default' => [
        ],
    ],

    /*
     * Overrides the default field resolver
     * Useful to setup default loading of eager relationships
     *
     * Example:
     *
     * 'defaultFieldResolver' => function ($root, $args, $context, $info) {
     *     // take a look at the defaultFieldResolver in
     *     // https://github.com/webonyx/graphql-php/blob/master/src/Executor/Executor.php
     * },
     */
    'defaultFieldResolver' => null,

    /*
     * The types available in the application. You can access them from the
     * facade like this: GraphQL::type('user')
     *
     * Example:
     *
     * 'types' => [
     *     'user' => 'App\GraphQL\Type\UserType'
     * ]
     *
     * or without specifying a key (it will use the ->name property of your type)
     *
     * 'types' =>
     *     'App\GraphQL\Type\UserType'
     * ]
     */

     //type ditulis di sini
    'types' => [
        // App\GraphQL\Type\PostType::class,

        //FitnessBand
        'FitnessBand'          => App\GraphQL\Type\FitnessBand\FitnessBand::class,
        'AdditionalFeatures'   => App\GraphQL\Type\FitnessBand\AdditionalFeatures::class,
        'ActivityTracker'      => App\GraphQL\Type\FitnessBand\ActivityTracker::class,
        'Battery'              => App\GraphQL\Type\FitnessBand\Battery::class,
        'Compability'          => App\GraphQL\Type\FitnessBand\Compability::class,
        'DesignFitnessBand'    => App\GraphQL\Type\FitnessBand\DesignFitnessBand::class,
        'Display'              => App\GraphQL\Type\FitnessBand\Display::class,
        'Ruggedness'           => App\GraphQL\Type\FitnessBand\Ruggedness::class,
        'Sensors'              => App\GraphQL\Type\FitnessBand\Sensors::class,
        'SmartphoneRemoteFeatures'  => App\GraphQL\Type\FitnessBand\SmartphoneRemoteFeatures::class,
        'Syncing'              => App\GraphQL\Type\FitnessBand\Syncing::class,
        'Notifications'        => App\GraphQL\Type\FitnessBand\Notifications::class,

        //Lens
        'Lens'                 => App\GraphQL\Type\Lens\Lens::class,
        'FeaturesLens'             => App\GraphQL\Type\Lens\FeaturesLens::class,
        'PackagingInfo'        => App\GraphQL\Type\Lens\PackagingInfo::class,
        'PerformanceLens'          => App\GraphQL\Type\Lens\PerformanceLens::class,
        'Physical'             => App\GraphQL\Type\Lens\Physical::class,

        //Monitor
        // 'IMonitor' => App\GraphQL\Type\Monitor\IMonitor::class,
        // 'IDisplay' => App\GraphQL\Type\Monitor\IDisplay::class,

        //PowerBank
        'PowerBank'             => App\GraphQL\Type\PowerBank\PowerBank::class,
        'BatteryCharging'       => App\GraphQL\Type\PowerBank\BatteryCharging::class,
        'Compability'           => App\GraphQL\Type\PowerBank\Compability::class,
        'ConnectivityPowerBank'          => App\GraphQL\Type\PowerBank\ConnectivityPowerBank::class,
        'DesignPowerBank'       => App\GraphQL\Type\PowerBank\DesignPowerBank::class,
        'FeaturesPowerBank'     => App\GraphQL\Type\PowerBank\FeaturesPowerBank::class,
        'PowerRequirements'     => App\GraphQL\Type\PowerBank\PowerRequirements::class,

        //Tablet
        'Tablet'                => App\GraphQL\Type\Tablet\Tablet::class,
        'ConnectivityTablet'    => App\GraphQL\Type\Tablet\ConnectivityTablet::class,
        'FeaturesTablet'        => App\GraphQL\Type\Tablet\FeaturesTablet::class,
        'Multimedia'            => App\GraphQL\Type\Tablet\Multimedia::class,
        'TabletDisplay' => App\GraphQL\Type\Tablet\Display::class,
        'TabletCamera' => App\GraphQL\Type\Tablet\Camera::class,
        'TabletDesign' => App\GraphQL\Type\Tablet\Design::class,
        'TabletPlatform' => App\GraphQL\Type\Tablet\Platform::class,

        //Smartwatch
        'Smartwatch' => App\GraphQL\Type\Smartwatch\Smartwatch::class,
        'Sensors' => App\GraphQL\Type\Smartwatch\Sensors::class,
        'Activity_tracker' => App\GraphQL\Type\Smartwatch\Activity_tracker::class,
        'SmartwatchConnectivity' => App\GraphQL\Type\Smartwatch\Connectivity::class,
        'SmartwatchDesign' => App\GraphQL\Type\Smartwatch\Design::class,
        'SmartwatchDisplay' => App\GraphQL\Type\Smartwatch\Display::class,
        'SmartwatchFeatures' => App\GraphQL\Type\Smartwatch\Features::class,
        'SmartwatchNotifications' => App\GraphQL\Type\Smartwatch\Notifications::class,

        //PC
        'PC' => App\GraphQL\Type\PC\PC::class,
        'Computing_system' => App\GraphQL\Type\PC\Computing_system::class,
        'Graphics'=> App\GraphQL\Type\PC\Graphics::class,
        'Storage'=> App\GraphQL\Type\PC\Storage::class,
        'Ports'=> App\GraphQL\Type\PC\Ports::class,
        'Mechanical'=> App\GraphQL\Type\PC\Mechanical::class,
        'Miscellaneous'=> App\GraphQL\Type\PC\Miscellaneous::class,

        //Monitor
        'Monitor' => App\GraphQL\Type\Monitor\Monitor::class,
        'Display' => App\GraphQL\Type\Monitor\Display::class,
        'Connectivity' => App\GraphQL\Type\Monitor\Connectivity::class,
        'Feature' => App\GraphQL\Type\Monitor\Feature::class,
        'Dimension' => App\GraphQL\Type\Monitor\Dimension::class,
        'Power' => App\GraphQL\Type\Monitor\Power::class,
        'General' => App\GraphQL\Type\Monitor\General::class,

         //Camera
         'Camera'    => App\GraphQL\Type\Camera\Camera::class,
         'VideoCamera'    => App\GraphQL\Type\Camera\VideoCamera::class,
         'StorageCamera'   => App\GraphQL\Type\Camera\StorageCamera::class,
         'Lens'      => App\GraphQL\Type\Camera\Lens::class,
         'BatteryCamera'   => App\GraphQL\Type\Camera\BatteryCamera::class,
         'Connectivity'   => App\GraphQL\Type\Camera\Connectivity::class,
         'Exposure'   => App\GraphQL\Type\Camera\Exposure::class,
         'DesignCamera'   => App\GraphQL\Type\Camera\DesignCamera::class,
         'Features'   => App\GraphQL\Type\Camera\Features::class,
         'Sensor'   => App\GraphQL\Type\Camera\Sensor::class,
         'Flash'   => App\GraphQL\Type\Camera\Flash::class,
        
         //Laptop
         'Laptop'    => App\GraphQL\Type\Laptop\Laptop::class,
         'General'    => App\GraphQL\Type\Laptop\General::class,
         'DisplayLaptop'    => App\GraphQL\Type\Laptop\DisplayLaptop::class,
         'ConnectivityLP'    => App\GraphQL\Type\Laptop\ConnectivityLP::class,
         'Memory'    => App\GraphQL\Type\Laptop\Memory::class,
         'Multimedia'    => App\GraphQL\Type\Laptop\Multimedia::class,
         'Performance'    => App\GraphQL\Type\Laptop\Performance::class,
         'Peripherals'    => App\GraphQL\Type\Laptop\Peripherals::class,
         'Ports'    => App\GraphQL\Type\Laptop\Ports::class,
         'StorageLP'    => App\GraphQL\Type\Laptop\Storage::class,
 
         //smartphone
         'Smartphone'      => App\GraphQL\Type\Smartphone\Smartphone::class,
         'CellularSM'      => App\GraphQL\Type\Smartphone\CellularSM::class,
         'CameraSM'        => App\GraphQL\Type\Smartphone\Camera::class,
         'BatterySmartphone'       => App\GraphQL\Type\Smartphone\BatterySmartphone::class,
         'ConnectivitySM'  => App\GraphQL\Type\Smartphone\ConnectivitySM::class,
         'DisplaySmartphone'       => App\GraphQL\Type\Smartphone\DisplaySmartphone::class,
         'DesignSmartphone'        => App\GraphQL\Type\Smartphone\DesignSmartphone::class,
         'FeaturesSM'      => App\GraphQL\Type\Smartphone\Features::class,
         'MultimediaSM'    => App\GraphQL\Type\Smartphone\MultimediaSM::class,
         'PlatformSM'     => App\GraphQL\Type\Smartphone\Platform::class
    ],

    /*
     * This callable will receive all the Exception objects that are caught by GraphQL.
     * The method should return an array representing the error.
     *
     * Typically:
     *
     * [
     *     'message' => '',
     *     'locations' => []
     * ]
     */
    'error_formatter' => [\Folklore\GraphQL\GraphQL::class, 'formatError'],

    /*
     * Options to limit the query complexity and depth. See the doc
     * @ https://github.com/webonyx/graphql-php#security
     * for details. Disabled by default.
     */
    'security' => [
        'query_max_complexity' => null,
        'query_max_depth' => null,
        'disable_introspection' => false
    ]
];
