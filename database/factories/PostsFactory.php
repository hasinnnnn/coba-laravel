<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8)),
            'slug'  =>fake()->slug(),
            'excerpt' => fake()->paragraph(),
            // 'body'  => '<p>'.implode('</p><p>', fake()->paragraphs(mt_rand(3,10))).'</p>',
            'body'  => collect(fake()->paragraphs(mt_rand(3,10)))
                    ->map(fn($p)=> "<p>$p</p>" )
                    ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' =>mt_rand(1,3)
        ];
    }
}
