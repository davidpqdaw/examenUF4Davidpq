<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course=new Course(['name'=>'PHP', "price"=>10]);
        $course->save();
        $course=new Course(['name'=>'JAVA', "price"=>10]);
        $course->save();
        $course=new Course(['name'=>'JS', "price"=>10]);
        $course->save();
        $course=new Course(['name'=>'PYTHON', "price"=>10]);
        $course->save();
        $course=new Course(['name'=>'LARAVEL', "price"=>10]);
        $course->save();

    }
}
