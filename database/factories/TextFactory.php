<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Text>
 */
class TextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'user_id' => $this->faker->numberBetween(1,3),
            'content' => $this->faker->realText(),
            // 'img_path'=> $this->faker->word,
            'price' => $this->faker->numberBetween(100, 1000),
            'email' => $this->faker->email(),
            'is_visible' => $this->faker->boolean(),
        ];
    }
}
