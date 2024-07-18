<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {

            $project = new Project();
            
            $project->title = $faker->words(3, true);
            $project->description = $faker->paragraph(2);
            $project->start_date = $faker->dateTimeThisYear();
            $project->in_progress = $faker->boolean();

            $project->save();

        }
    }
}
