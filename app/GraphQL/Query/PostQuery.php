<?php

namespace App\GraphQL\Query;

// use GraphQL;
// use GraphQL\Type\Definition\Type;
// use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
// use App\Post;
// use App\User;

// class PostQuery extends Query
// {
    //nama untuk dipanggil di config/graphql.php dan di query
    // protected $attributes = [
    //     'name' => 'PostQuery',
    //     'description' => 'Merupakan Query dari post'
    // ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    // public function type()
    // {
    //     return Type::listOf(GraphQL::type('PostType'));
    // }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    // public function args()
    // {
    //     return [
    //         'api_token' => ['name' => 'api_token', 'type' => Type::string()]
    //     ];
    // }

    //resolve dijalankan ketika input dimasukkan
    // public function resolve($root, $args)
    // {
    //     $user = User::where('api_token','=', $args['api_token'])->first();
    //     if ($user!=null) {
    //         return Post::all();
    //     }else {
    //         return "kamu tak punya hak untuk mengakses data ini";
    //     }
    // }
// }
