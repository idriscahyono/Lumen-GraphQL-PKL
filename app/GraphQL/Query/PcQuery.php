<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
// use App\Display;
use App\Model\PC\Pc;

class PcQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'PcQuery',
        'description' => 'Merupakan Root Query untuk mengambil data dari PC'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('PC'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Pc::all();
    }
}
