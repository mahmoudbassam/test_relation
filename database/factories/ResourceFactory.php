<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Resource::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->randomElement(['partner', 'Shared Services Manager', 'General', 'senior']),
            'email' => $this->faker->email(),
            'is_leader' => rand(0,1),

        ];
    }
}
