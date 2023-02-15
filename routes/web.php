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

# Home
Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
})->name('home');

# About
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Lumi Novry M",
        "email" => "luminovrymekel@gmail.com",
        "image" => "myimage.jpg"
    ]);
})->name('about');

# Blog
Route::get('/blog', function () {

    # Simulasi Blog Posts
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kenshi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla nam explicabo porro officia nobis et pariatur molestias labore voluptatem minima, veritatis earum? Consectetur sunt possimus consequatur, sed fugit corrupti iure magni ut optio! Quis repudiandae esse eaque et hic quo sed rerum natus ipsam recusandae ab, sint nisi velit necessitatibus provident fuga, consequatur iusto, consequuntur dolores accusantium veritatis magnam quae? Omnis nihil dolor est voluptatum consequatur ullam? Harum provident dolor explicabo voluptatibus unde, fugiat eaque amet ullam reiciendis illo illum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Takahashi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, provident officiis doloremque voluptates fuga explicabo animi dolorem omnis, aut error molestias voluptas numquam saepe tempora minus. A doloremque minus quisquam ratione! Dolorum quos soluta consequuntur numquam reiciendis iste eos natus fuga quam laudantium! Tempore delectus iste explicabo dolores sit adipisci minima ad. Libero quasi accusantium quaerat rerum, accusamus labore repellat. Rem illo qui quo impedit, facere unde eos molestias quas ipsam officiis quaerat inventore natus laboriosam non maxime provident nobis dignissimos voluptatem dolorum voluptatum omnis quia mollitia. Earum vel, itaque ad nulla, eum minima sit, illum ducimus animi voluptas rerum?"
        ],
    ];

    return view('posts',[
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
})->name('blog');

# Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
     # Simulasi Blog Posts
     $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kenshi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla nam explicabo porro officia nobis et pariatur molestias labore voluptatem minima, veritatis earum? Consectetur sunt possimus consequatur, sed fugit corrupti iure magni ut optio! Quis repudiandae esse eaque et hic quo sed rerum natus ipsam recusandae ab, sint nisi velit necessitatibus provident fuga, consequatur iusto, consequuntur dolores accusantium veritatis magnam quae? Omnis nihil dolor est voluptatum consequatur ullam? Harum provident dolor explicabo voluptatibus unde, fugiat eaque amet ullam reiciendis illo illum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Takahashi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, provident officiis doloremque voluptates fuga explicabo animi dolorem omnis, aut error molestias voluptas numquam saepe tempora minus. A doloremque minus quisquam ratione! Dolorum quos soluta consequuntur numquam reiciendis iste eos natus fuga quam laudantium! Tempore delectus iste explicabo dolores sit adipisci minima ad. Libero quasi accusantium quaerat rerum, accusamus labore repellat. Rem illo qui quo impedit, facere unde eos molestias quas ipsam officiis quaerat inventore natus laboriosam non maxime provident nobis dignissimos voluptatem dolorum voluptatum omnis quia mollitia. Earum vel, itaque ad nulla, eum minima sit, illum ducimus animi voluptas rerum?"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});