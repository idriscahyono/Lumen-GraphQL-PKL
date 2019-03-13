<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Post;

class PostMutation extends Mutation
{
    protected $attributes = [
        'name' => 'PostMutation',
        'description' => 'Mutasi untuk menambah Postingan'
    ];

    public function type()
    {
        return GraphQL::type('PostType');
    }

    public function args()
    {
        return [
            'title' => ['name' => 'title', 'type' => Type::nonNull(Type::string())],
            'content' => ['name' => 'content', 'type' => Type::nonNull(Type::string())]
        ];
    }

    public function resolve($root, $args)
    {
        $post = new Post();
        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->save();

        return $post;
    }
}
