<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $developers = [];
        for ($i=0; $i < rand(2, 5); $i++) { 
            $developers[] = fake()->name();
        }
        
        return [
            'product_id' => fake()->uuid(),
            'product_name' => Str::title(fake()->words(3, true)),
            'product_owner_name' => fake()->name(),
            'developers' => json_encode($developers),
            'scrum_master_name' => fake()->name(),
        ];

    }
}
