<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rifky Maulana",
        "email" => "193040068@mail.unpas.ac.id",
        "img" => "IMG_wtzmr6.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});



// halaman single post









Route::get('posts/{slug}', function($slug){
    $blog_post = [
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
    
    $new_post = [];
    foreach($blog_post as $post){
        if ($post["slug"] === $slug) {
            $new_post =$post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);

});