<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "asin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quisquam necessitatibus minus iure earum non et natus pariatur hic commodi at voluptate, ut fugit eligendi totam deserunt dicta consequuntur illum, recusandae eos, id doloribus! Consectetur nihil similique nostrum tempora perferendis, illo deserunt vel modi id, est illum cumque ducimus reiciendis suscipit commodi tenetur voluptatibus non quaerat deleniti. Nam illum similique ut excepturi iste, dignissimos placeat, cupiditate quaerat dolor quis aspernatur labore libero fugit et tempora deserunt possimus sunt, pariatur error autem incidunt quisquam ex. Molestias ut, pariatur sit corporis ducimus aliquid quasi quis in. Ratione repellendus culpa sapiente quo deserunt."
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "asin juga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quisquam necessitatibus minus iure earum non et natus pariatur hic commodi at voluptate, ut fugit eligendi totam deserunt dicta consequuntur illum, recusandae eos, id doloribus! Consectetur nihil similique nostrum tempora perferendis, illo deserunt vel modi id, est illum cumque ducimus reiciendis suscipit commodi tenetur voluptatibus non quaerat deleniti. Nam illum similique ut excepturi iste, dignissimos placeat, cupiditate quaerat dolor quis aspernatur labore libero fugit et tempora deserunt possimus sunt, pariatur error autem incidunt quisquam ex. Molestias ut, pariatur sit corporis ducimus aliquid quasi quis in. Ratione repellendus culpa sapiente quo deserunt."
        ]
        ];

        public static function all(){
            return collect(self :: $blog_post);
        }

        public static function find($slug){
            $posts = static :: all();
            return $posts->firstWhere('slug',$slug);
        }
}
