<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prod_cat_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($prod_cat_name);
        return [
            'name' => $prod_cat_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
        ];
    }
}
