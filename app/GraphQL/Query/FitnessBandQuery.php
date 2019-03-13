<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
use App\Model\FitnessBand\FitnessBand;

class FitnessBandQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'FitnessBandQuery',
        'description' => 'Merupakan Query dari post'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('FitnessBand'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari FitnessBand
    public function resolve($root, $args)
    {
        return FitnessBand::all();
    }
}
