<?php

namespace App\Models;

class Post {
    private static $blog_posts = [[
            "title" => "Artikel Pertama",
            "slug" => "artikel-pertama",
            "author" => "Yesaya Kevinedo Delroyvitto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],[
            "title" => "Artikel Kedua",
            "slug" => "artikel-kedua",
            "author" => "Yesaya Kevinedo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
