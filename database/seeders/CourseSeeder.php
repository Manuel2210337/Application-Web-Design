<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group; 
use App\Models\Course; 

class CourseSeeder extends Seeder
{
    public function run(): void 
    { 
        $courses = Course::factory(15)->create(); 
        $groups = Group::all(); 
        if ($groups->count() > 0) {
            foreach ($courses as $course) { 
                $course->groups()->attach( 
                    $groups->random(rand(1, min(3, $groups->count())))->pluck('id') 
                ); 
            }
        }
    }
}