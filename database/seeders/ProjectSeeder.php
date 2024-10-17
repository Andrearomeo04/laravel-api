<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<5; $i++){
            $project = new Project();
            $project->title = $faker->sentence(2);
            $project->slug = Str::slug($project->title, '-');
            $project->description = $faker->text(100);

            $project->save();
        }
    }
}
