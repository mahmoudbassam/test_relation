<?php

namespace Database\Factories;

use App\Models\project_resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class project_resourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=project_resource::class;
    public function definition()
    {

        return [
            'resource_id' => rand(0,30),
            'project_id' => rand(0, 10)
             ];
    }
}
