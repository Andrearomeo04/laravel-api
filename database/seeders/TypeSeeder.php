<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['front-end', 'back-end', 'fullstack'];

        foreach($types as $type){
            $new_type = New Type();
            $new_type->title = $type;
            $new_type->slug = Type::generateSlug($type);
            $new_type->save();
        }
    }
}
