<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
use App\Model\Smartphone\Smartphone;
// use App\Models\Smartphone\Cellular;
// use App\Models\Smartphone\Camera;
// use App\Models\Smartphone\Battery;
// use App\Models\Smartphone\Connectivity;
// use App\Models\Smartphone\Display;
// use App\Models\Smartphone\Design;
// use App\Models\Smartphone\Features;
// use App\Models\Smartphone\Multimedia;
// use App\Models\Smartphone\Platform;

class SmartphoneQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'SmartphoneQuery',
        'description' => 'Merupakan Query dari post'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('Smartphone'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Smartphone::all();

    }
}
