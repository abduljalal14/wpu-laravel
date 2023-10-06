<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Abdul Jalal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam tenetur aliquid ducimus temporibus. Nobis, dicta rerum architecto at tenetur corrupti omnis incidunt unde nulla officiis ut cumque aliquam ratione animi in, id possimus esse sit excepturi pariatur ex ipsam dolorum, totam ipsum. Neque, fugiat molestias? Nesciunt dolorem quos dicta non molestiae asperiores assumenda iste illum! Nesciunt distinctio esse ex alias sequi commodi ullam dolor exercitationem maiores excepturi quas repellat recusandae expedita eaque magnam, illum doloribus ducimus nobis maxime tempore vel!"
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Putra Anggara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam tenetur aliquid ducimus temporibus. Nobis, dicta rerum architecto at tenetur corrupti omnis incidunt unde nulla officiis ut cumque aliquam ratione animi in, id possimus esse sit excepturi pariatur ex ipsam dolorum, totam ipsum. Neque, fugiat molestias? Nesciunt dolorem quos dicta non molestiae asperiores assumenda iste illum! Nesciunt distinctio esse ex alias sequi commodi ullam dolor exercitationem maiores excepturi quas repellat recusandae expedita eaque magnam, illum doloribus ducimus nobis maxime tempore vel!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',  $slug);
    }
}
