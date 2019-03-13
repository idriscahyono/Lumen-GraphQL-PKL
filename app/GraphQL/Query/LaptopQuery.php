<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
use App\Model\Laptop\General;
use App\Model\Laptop\Storage;
use App\Model\Laptop\Connectivity;
use App\Model\Laptop\Memory;
use App\Model\Laptop\Multimedia;
use App\Model\Laptop\Ports;
use App\Model\Laptop\Periperhals;
use App\Model\Laptop\Performance;


// use App\Models\Laptop\Sensor;
// use App\Models\Laptop\Flash;

class LaptopQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'LaptopQuery',
        'description' => 'Merupakan Query dari post'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('Laptop'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Laptop::all();
        // return Connectivity::all();
        // return Display::all();
         // return Multimedia::all();
        // return Memory::all();
        // return Ports::all();
        // return Peripherals::all();
        // return Storage::all();
         // return Performance::all();
       
    }
}
