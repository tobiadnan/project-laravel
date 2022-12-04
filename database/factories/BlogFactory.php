<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(mt_rand(4,10)),
            'slug'=>$this ->faker->slug(),
            'bagian'=>$this->faker->paragraph(),
            'body'=>collect($this->faker->paragraph(mt_rand(5,10)))
                    ->map(fn($p)=>"<p>$p</p>")
                    ->implode(''),
            'user_id'=>mt_rand(1,4),
            'category_id'=>mt_rand(1,3)
        ];
    }
}
