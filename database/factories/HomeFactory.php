<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1,3),
            'user_id' => $this->faker->numberBetween(1,3),
            'slug' => $this->faker->slug(),
            
            # Membuat 3-5 paragraf dan membuat supaya ditampilkan dengan paragraf
            # Membungkus paragraf di dalam collection
            'body' => collect($this->faker->paragraphs(mt_rand(3,5)))

            # Mapping
                    -> map(fn($p) => "<p>$p</p>")
            # Join
                    -> implode(''),
            'excerpt' => $this->faker->sentence(10)
        ];
    }
}
