<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            PostsSeeder::class,
            CategorySeeder::class,
        ]);

        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' =>'Muhammad Hasin Munadi',
        //     'email' => 'muhamma@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name' =>'Rhamta pratama aji',
        //     'email' => 'ajiec123@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

    }
}
