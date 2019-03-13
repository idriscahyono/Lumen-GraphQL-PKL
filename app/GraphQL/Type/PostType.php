<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    //atribut name disini untuk setting di config/graphql.php
    protected $attributes = [
        'name' => 'PostType',
        'description' => 'merupakan type dari post'
    ];

    //menentukan tabel apa saja yang dapat diambil oleh user
    public function fields()
    {
        return [
            'id' => [
              'type' => Type::nonNull(Type::int()),
              'description' => 'ini id dari tiap post'
            ],
            'title' => [
              'type' => Type::string(),
              'description' => 'ini Judul dari postingan'
            ],
            'content' => [
              'type' => Type::string(),
              'description' => 'ini isi dari Postingan'
            ],
            'created_at' => [
              'type' => Type::string(),
              'description' => 'Tanggal dibuatnya postingan'
            ],
            'updated_at' => [
              'type' => Type::string(),
              'description' => 'Tanggal diupdatenya postingan'
            ],
        ];
    }

    //hanya fungsi mengubah return dari kolom updated_at dan created_at
    //menjadi string agar tidak error ketika dipanggil melalui graphiql
    protected function resolveCreatedAtField($root, $args)
    {
      return (string) $root->created_at;
    }

    protected function resolveUpdatedAtField($root, $args)
    {
      return (string) $root->updated_at;
    }
}


// QwphAfTB7tLLKdzZbJ09yniwg8uqyZKKH71uSEHbDC1Bx9TgVyUuPN61l0YkPVck7UCKifEHjKKfu46nzfTSEkpMUrvU3J4ybBPpKGk5Y7pDBmSxJQpgVTPGZkoIV4G9RoMfXxgp9S3GAkgTCfuGfi