<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Resource;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Project::class;

    public function definition()
    {
        $startDate = Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->addDays(rand(2, 40));

        return [
            'name' => $this->faker->name(),
            'leader' => Resource::query()->where('is_leader',1)->inRandomOrder()->first()->id,
            'start_date' => $startDate,
            'end_date' => $endDate,

        ];
    }
}
