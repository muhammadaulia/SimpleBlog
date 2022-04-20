<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            # Membuat data dummy dengan library faker
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'contact' => $this->faker->phoneNumber()
        ];
    }
}
