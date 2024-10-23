<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = ['HTML', 'CSS', 'Bootstrap', 'Nodejs', 'SCSS', 'VueJs', 'PHP', 'Laravel', 'MySQL'];

        foreach($techs as $tech){
            $technology = New Technology();
            $technology->title = $tech;
            $technology->slug = Technology::generateSlug($tech);
            $technology->save();
        }
    }
}
