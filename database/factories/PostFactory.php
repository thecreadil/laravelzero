<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'created_at'=> now(),
        ];
    }
}
