<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prod_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($prod_name);
        return [
            'name' => $prod_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(10, 1000),
            'status' => 1,
            'stock' => $this->faker->numberBetween(1, 999),
            'image' => 'product_'. $this->faker->unique()->numberBetween(1, 21).'.jpg',
            'product_category_id' => $this->faker->numberBetween(1,9)

        ];
    }
}
