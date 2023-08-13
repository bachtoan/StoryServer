<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PageTouchableFactory extends Factory
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
            'id_page' => rand(1,10),
            'id_touchable' => rand(1,10),
            'positionX' => rand(1,10),
            'positionY' => rand(1,10),
        


        ];
    }
}
