<?php

namespace Database\Seeders;

use App\Models\project_resource;
use Illuminate\Database\Seeder;

class ProjectResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    project_resource::factory()->count(40)->create();
    }
}
