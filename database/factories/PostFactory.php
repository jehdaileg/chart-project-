<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'tag' => $this->faker->name,
            'likes' => $this->faker->numberBetween(0, 20),
            'created_at' => $this->faker->numberBetween(2010, 2025)
        ];
    }
}
