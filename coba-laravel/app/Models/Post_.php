<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Rifky maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus accusantium quidem laboriosam enim repudiandae tenetur nisi? Distinctio, quis officia hic laudantium reiciendis, vel numquam voluptates debitis sint quod sapiente nam ipsam voluptatem facere consequatur iusto ad voluptatum velit eius, at magnam! Qui quisquam, odio optio facere neque vel maiores voluptas et magnam vero ipsum unde beatae earum voluptates. Aspernatur nesciunt dolorem esse veniam tenetur. Mollitia eum ipsa necessitatibus facilis maxime nemo amet commodi nam minus, aspernatur dignissimos itaque consequuntur deleniti."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "bangbang",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus accusantium quidem laboriosam enim repudiandae tenetur nisi? Distinctio, quis officia hic laudantium reiciendis, vel numquam voluptates debitis sint quod sapiente nam ipsam voluptatem facere consequatur iusto ad voluptatum velit eius, at magnam! Qui quisquam, odio optio facere neque vel maiores voluptas et magnam vero ipsum unde beatae earum voluptates. Aspernatur nesciunt dolorem esse veniam tenetur. Mollitia eum ipsa necessitatibus facilis maxime nemo amet commodi nam minus, aspernatur dignissimos itaque consequuntur deleniti."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts) ;
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
