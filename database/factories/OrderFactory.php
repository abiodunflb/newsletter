<?php

namespace Database\Factories;

use App\Models\Order;
// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'item_count' => rand(1, 10),
        ];
    }
}
