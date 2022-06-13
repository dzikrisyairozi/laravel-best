<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Gabriella Natasya",
            "slug"=> "gabriella-natasya",
            "author" => "Dzikri Syairozi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum!"
        ],
        [
            "title" => "Dzikri Syairozi",
            "slug"=>"dzikri-syairozi",
            "author" => "Gabriella Natasya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Eveniet iusto culpa eius numquam ut est dolor. Mollitia aspernatur,
            dolore vero voluptatibus asperiores, ducimus a earum placeat est et nisi eum<3"
        ],
    ];

    public static function all(){
        return self::$blog_posts;
    }

    public static function find($slug){
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
            }
        }

        return $post;
    }
}
