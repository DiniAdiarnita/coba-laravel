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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Luxury Elegant",
        "email" => "luxury@hotmail.com",
        "image" => "img-1.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dini Adiarnita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus praesentium temporibus esse fuga rerum perferendis, molestias quae nesciunt quia veniam error quisquam optio consequuntur eos, eaque, sit ex? Error incidunt totam, nostrum nesciunt assumenda sunt consequuntur, dolorem libero itaque porro aspernatur dignissimos autem vero qui iste commodi accusantium repudiandae sed. Excepturi assumenda molestias, deleniti porro exercitationem et omnis dolorum fugiat libero id adipisci iste nostrum. Expedita minus accusantium iste neque, mollitia incidunt distinctio dignissimos porro corporis, iure aspernatur eaque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diana Pertiwi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio delectus impedit ut in hic optio, placeat pariatur voluptatibus reprehenderit provident sunt, suscipit odio accusantium vitae repellat, dolor totam nobis aliquam numquam quisquam. Suscipit quod eius assumenda dolorem, consectetur, deleniti aspernatur quam, facilis dolore obcaecati nam ipsam atque commodi molestias laborum! Aliquam perspiciatis delectus laudantium ratione harum natus voluptatibus atque adipisci sint sed libero iusto perferendis quo dignissimos excepturi facere ullam sapiente cum repellat, odit modi praesentium minus soluta? Aspernatur inventore optio vel nemo quibusdam, quia, ducimus at provident culpa dolorem sint minima, ab ipsa error. Pariatur porro quis qui alias."
        ]
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dini Adiarnita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ducimus praesentium temporibus esse fuga rerum perferendis, molestias quae nesciunt quia veniam error quisquam optio consequuntur eos, eaque, sit ex? Error incidunt totam, nostrum nesciunt assumenda sunt consequuntur, dolorem libero itaque porro aspernatur dignissimos autem vero qui iste commodi accusantium repudiandae sed. Excepturi assumenda molestias, deleniti porro exercitationem et omnis dolorum fugiat libero id adipisci iste nostrum. Expedita minus accusantium iste neque, mollitia incidunt distinctio dignissimos porro corporis, iure aspernatur eaque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diana Pertiwi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio delectus impedit ut in hic optio, placeat pariatur voluptatibus reprehenderit provident sunt, suscipit odio accusantium vitae repellat, dolor totam nobis aliquam numquam quisquam. Suscipit quod eius assumenda dolorem, consectetur, deleniti aspernatur quam, facilis dolore obcaecati nam ipsam atque commodi molestias laborum! Aliquam perspiciatis delectus laudantium ratione harum natus voluptatibus atque adipisci sint sed libero iusto perferendis quo dignissimos excepturi facere ullam sapiente cum repellat, odit modi praesentium minus soluta? Aspernatur inventore optio vel nemo quibusdam, quia, ducimus at provident culpa dolorem sint minima, ab ipsa error. Pariatur porro quis qui alias."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
       if ($post["slug"] === $slug) {
           $new_post = $post;
       }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});