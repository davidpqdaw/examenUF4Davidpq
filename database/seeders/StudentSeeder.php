<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_php=Course::where('name','php')->first();
        $student=new Student(['name'=>'alumno1', "email"=>"alumno1@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno2', "email"=>"alumno2@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno3', "email"=>"alumno3@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno4', "email"=>"alumno4@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno5', "email"=>"alumno5@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno6', "email"=>"alumno6@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno7', "email"=>"alumno7@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno8', "email"=>"alumno8@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno9', "email"=>"alumno9@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        $student=new Student(['name'=>'alumno10', "email"=>"alumno10@gmail.com","birthDate"=>"2000/05/23"]);
        $student->save();
        // $student->course()->attach($course_php);
    }
}
