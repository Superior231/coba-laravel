<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',

            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($paragraph) => "<p>$paragraph</p>" )
                ->implode(''),
            'user_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,4)
        ];
    }
}
