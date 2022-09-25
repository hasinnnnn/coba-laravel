<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posts;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Posts::factory(20)->create();
        // Posts::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-1',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et, quod amet laudantium, reprehenderit, error veritatis dolorum fuga doloremque nemo eius. Culpa quod laboriosam commodi obcaecati minima?',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Posts::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-2',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et, quod amet laudantium, reprehenderit, error veritatis dolorum fuga doloremque nemo eius. Culpa quod laboriosam commodi obcaecati minima?',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Posts::create([
        //     'title'=>'Judul KEtiga',
        //     'slug'=>'judul-3',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates dignissimos aut et, quod amet laudantium, reprehenderit, error veritatis dolorum fuga doloremque nemo eius. Culpa quod laboriosam commodi obcaecati minima?',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}

