<?php

namespace App\Models;

class Home
{
    private static $home_post = [
      [
          "title" => "Post Pertama",
          "author" => "Vicar Penelope",
          "slug" => "post_pertama",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam temporibus hic accusamus provident unde expedita architecto aliquid ut quam modi nisi vitae harum veniam, laudantium consectetur, culpa dignissimos omnis excepturi ab aspernatur velit libero est incidunt ducimus. Quis, autem eligendi? Dolorem eveniet culpa at ipsa, beatae quos nulla similique libero rerum expedita accusamus reprehenderit nostrum. Explicabo ut expedita odit. Rerum labore quas mollitia cum molestiae rem quidem? Maxime corrupti animi id libero. Dolore sit fugiat similique ea."
      ],

      [
          "title" => "Post Kedua",
          "author" => "James Cordon",
          "slug" => "post_kedua",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam temporibus hic accusamus provident unde expedita architecto aliquid ut quam modi nisi vitae harum veniam, laudantium consectetur, culpa dignissimos omnis excepturi ab aspernatur velit libero est incidunt ducimus. Quis, autem eligendi? Dolorem eveniet culpa at ipsa, beatae quos nulla similique libero rerum expedita accusamus reprehenderit nostrum. Explicabo ut expedita odit. Rerum labore quas mollitia cum molestiae rem quidem? Maxime corrupti animi id libero. Dolore sit fugiat similique ea."
      ],

      [
          "title" => "Post Ketiga",
          "author" => "Arthur Megamind",
          "slug" => "post_ketiga",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam temporibus hic accusamus provident unde expedita architecto aliquid ut quam modi nisi vitae harum veniam, laudantium consectetur, culpa dignissimos omnis excepturi ab aspernatur velit libero est incidunt ducimus. Quis, autem eligendi? Dolorem eveniet culpa at ipsa, beatae quos nulla similique libero rerum expedita accusamus reprehenderit nostrum. Explicabo ut expedita odit. Rerum labore quas mollitia cum molestiae rem quidem? Maxime corrupti animi id libero. Dolore sit fugiat similique ea."
      ]
    ];

    public static function all() {
      #Bukan array collection
      // // Karena properti static maka digunakan ::
      // return self::$home_post;

      #Array collection
      // Merubah array biasa menjadi array collection
      return collect(self::$home_post);
    }

    public static function find($slug) {
      #Tanpa menggunakan array collection
      // // Ambil semua data di $home_post dan masukkan ke $slugPosts
      // $slugPosts = self::$home_post;

      // $newPost = [];

      // foreach($slugPosts as $p) {
      //   if ($p["slug"] === $slug) {
      //       $newPost = $p;
      //   }
      // }
      // return $newPost;

      # Dengan menggunakan array collection
      // Mengambil data dari fungsi all() yang sudah berupa array collection
      $slugPosts = static::all();

      // Tampilkan post dimana 'slug' bernilai sama dengan $slug
      return $slugPosts->firstWhere('slug', $slug);

      
    }
}
