<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
use App\Model\Camera\Camera;
// use App\Models\Camera\Storage;
// use App\Models\Camera\Lens;
// use App\Models\Camera\Battery;
// use App\Models\Camera\Connectivity;
// use App\Models\Camera\Exposures;
// use App\Models\Camera\Design;
// use App\Models\Camera\Features;
// use App\Models\Camera\Sensor;
// use App\Models\Camera\Flash;

class CameraQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'CameraQuery',
        'description' => 'Merupakan Query dari post'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('Camera'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Camera::all();

    }
}
