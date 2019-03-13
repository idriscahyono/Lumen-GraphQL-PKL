<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
// use App\Display;
use App\Model\Smartwatch\Smartwatch;

class SmartwatchQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'SmartwatchQuery',
        'description' => 'Merupakan Root Query untuk mengambil data dari Smartwatch'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('Smartwatch'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Smartwatch::all();
    }
}
