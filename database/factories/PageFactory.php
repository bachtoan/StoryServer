<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_story' => rand(1,10),
            'page_number' => rand(1,1000),
            'sound' => $this->faker->sentence(),
            'background' => $this->faker->url(),
        ];
    }
}
