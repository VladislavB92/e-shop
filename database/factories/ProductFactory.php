<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sizes = ['S', 'M', 'L', 'XL'];

        return [
            'name' => ucfirst($this->faker->word),
            'size' => $sizes[rand(0, 3)],
            'price' => (string) $this->faker->randomNumber,
            'avalaible_quantity' => $this->faker->randomDigit
        ];
    }
}
