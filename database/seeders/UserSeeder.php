<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     [ 'usertype'=>'Admin',
        //      'name'=>'admin@gmail.com',
        //     // 'password'=>Hash::make('admin12345'),
        //      'password'=>'admin12345',
        //      'role'=>'Admin',
        //      'status'=>'1',
        //      ]
             
      
        //  ]);
         //data for years
         DB::table('student_years')->insert([
            
            [
                'name'=>'2018'
            ],
            [
                'name'=>'2019'
            ],
            [
                'name'=>'2020'
            ],
            [
                'name'=>'2021'
            ],
            [ 
                'name'=>'2022'
            ],
             
      
         ]);
//data for shifts
         DB::table('student_shifts')->insert([
            [
                'name'=>'Shift A 8:00-12:00'
            ],

            [ 
                'name'=>'Shift B 13:00-17:00'
            ],
             
      
         ]);
// data for groups
         DB::table('student_groups')->insert([
            [
                'name'=>'A'
            ],

            [ 
                'name'=>'B'
            ],
            [ 
                'name'=>'c'
            ],
            [ 
                'name'=>'D'
            ],
             
      
         ]);
// data for classes
         DB::table('student_classes')->insert([
            [
                'name'=>'class 1'
            ],
            [
                'name'=>'class 2'
            ],
            [
                'name'=>'class 3'
            ],

            [
                'name'=>'class 4'
            ],
            [
                'name'=>'class 5'
            ],
            [
                'name'=>'class 6'
            ],
            [
                'name'=>'class 7'
            ],
            [
                'name'=>'class 8'
            ],
            [
                'name'=>'class 9'
            ],
            [
                'name'=>'class 10'
            ],
            [
                'name'=>'class 11th Commerce'
            ],
            [
                'name'=>'class 11th Science'
            ],
            [
                'name'=>'class 12th Commerce'
            ],

            [ 
                'name'=>'class 12th Science'
            ],
             
      
         ]);
// data for subject

        DB::table('school_subjects')->insert([
            [
                'name'=>'Math'
            ],

            [ 
                'name'=>'Biology'
            ],
            [ 
                'name'=>'English'
            ],
            [ 
                'name'=>'Chemistry'
            ],
            [ 
                'name'=>'Hindi'
            ],
             
            [ 
                'name'=>'Gujarati'
            ],
             
            [ 
                'name'=>'physics'
            ],
             
            [ 
                'name'=>'Science'
            ],
             
            [ 
                'name'=>'Social science'
            ],
             
            [ 
                'name'=>'Account'
            ],
             
            [ 
                'name'=>'Computer'
            ],
             
            [ 
                'name'=>'GK'
            ],
             
             
      
         ]);

 // data for fee categoires

        DB::table('fee_categories')->insert([
            [
                'name'=>'Registration'
            ],

            [ 
                'name'=>'Monthly'
            ],
            [ 
                'name'=>'Exam'
            ],
           
             
      
         ]);
         DB::table('leave_purposes')->insert([
            [
                'name'=>'Health Issue'
            ],

            [ 
                'name'=>'Family Problem'
            ],
            [ 
                'name'=>'Wedding'
            ],
            [ 
                'name'=>'Vacation'
            ],
           
             
      
         ]);

         DB::table('exam_types')->insert([
            [
                'name'=>'Semester'
            ],

            [ 
                'name'=>'Final Exam'
            ],
            [ 
                'name'=>'Test'
            ],
            [ 
                'name'=>'Monthly Exam'
            ],
           
             
      
         ]);

         DB::table('designations')->insert([
            [
                'name'=>'Teacher'
            ],

            [ 
                'name'=>'Vice Principal'
            ],
            [ 
                'name'=>'Assistant'
            ],
            [ 
                'name'=>'Accountant'
            ],
            [ 
                'name'=>'Head of Science Lab '
            ],
           
            [ 
                'name'=>'Assistant of Science Lab'
            ],
           
            [ 
                'name'=>'Head of Computer Lab'
            ],
            [ 
                'name'=>'Assistant of Computer Lab'
            ],
            [ 
                'name'=>'Sports Teacher'
            ],
            [ 
                'name'=>'Dance Teacher'
            ],
            [ 
                'name'=>'Others'
            ],
           
           
         ]);
         


    }
}
