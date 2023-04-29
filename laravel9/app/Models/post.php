<?php

namespace App\Models;



class post
{
   private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "Judul-Post-pertama",
            "author" => "Syifa ay",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deserunt facilis neque expedita dolor ea, corporis nihil in provident ratione accusantium alias laborum quas nulla repellat facere at suscipit voluptatem fuga aperiam! Mollitia laudantium magnam ipsam deserunt tenetur odit ipsum, dolor ut inventore voluptas reiciendis facere cumque repellendus labore, quibusdam eum ratione a nobis ullam architecto. Quam, minus quas esse, earum velit veritatis, exercitationem hic pariatur animi eveniet sit blanditiis aliquid sequi suscipit maxime fuga vitae voluptate? Qui, itaque at."
        ],
        [
            "title" => "judul post Kedua",
            "slug" => "Judul-Post-kedua",
            "author" => " ayuy nih",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                       Blanditiis deserunt facilis neque expedita dolor ea, corporis nihil in provident ratione accusantium alias laborum quas nulla repellat facere at suscipit voluptatem fuga aperiam! Mollitia laudantium magnam ipsam deserunt tenetur odit ipsum, dolor ut inventore voluptas reiciendis facere cumque repellendus labore, quibusdam eum ratione a nobis ullam architecto. Quam, minus quas esse, earum velit veritatis, exercitationem hic pariatur animi eveniet sit blanditiis aliquid sequi suscipit maxime fuga vitae voluptate? Qui, itaque at."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    //     $post = [];
    // foreach($posts as $p) {
    //    if($p["slug"] === $slug){
    //         $post = $p;
    //    }
    // }
    // return $post;
    return $posts->firstWhere('slug', $slug);
    }
}
