<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $categoryIds = Category::pluck('id')->toArray();
        
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 10, 5000),
            'stock' => $this->faker->numberBetween(1, 100),
            'is_available' => $this->faker->boolean(80),
            'category_id' => $this->faker->randomElement($categoryIds),
            'barcode' => $this->faker->bothify('?##??##???'), 
        ];
    }
}