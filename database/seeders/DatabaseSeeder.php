<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('students')->insert(
            [[
                'first_name' => 'khaled',
                'middle_name' => 'walid',
                'last_name' => 'sourani',
                'mother_name' => 'm',
                'gender' => 'male',
                'ssn' => '404055444',
                'religion' => 'muslim',
                'birth_date' => '2022-03-02',
                'addmission_date' => '2022-03-02',
                'enrolled' => true,
                'picture' => 'pic',
                'email' => 'khaled-w-s@hotmail.com',
                'user_name' => 'khaled',
            ], [
                'first_name' => 'khaled',
                'middle_name' => 'walid',
                'last_name' => 'sourani',
                'mother_name' => 'm',
                'gender' => 'male',
                'ssn' => '404055444',
                'religion' => 'muslim',
                'birth_date' => '2022-03-02',
                'addmission_date' => '2022-03-02',
                'enrolled' => true,
                'picture' => 'pic',
                'email' => 'khaled-w-s@hotmail.com',
                'user_name' => 'khaled',
            ],]
        );

        DB::table('teachers')->insert([
            [
                'first-name' => 'ahmed',
                'middle-name' => 'Z',
                'last-name' => 'f',
                'join_date' => '2022-03-02'
            ],
            [
                'first-name' => 'Ali',
                'middle-name' => 'W',
                'last-name' => 'd',
                'join_date' => '2022-03-02'
            ],
        ]);

        DB::table('levels')->insert([
            [
                'name' => 'اول',
            ],
            [
                'name' => 'ثاني',
            ],
            [
                'name' => 'ثالت',
            ],
            [
                'name' => 'رابع',
            ],
            [
                'name' => 'خامس',
            ],
            [
                'name' => 'سادس',
            ],
        ]);

        DB::table('semester')->insert([
            [
                'name' => '2021-2022 1st',
                'year' => '2021',
                'semester' => '1st',
            ],
            [
                'name' => '2021-2022 2nd',
                'year' => '2021',
                'semester' => '2nd',
            ],
        ]);

        DB::table('subjects')->insert([
            [
                'name' => 'عربي',
                'level_id' => '3',
            ],
            [
                'name' => 'حساب',
                'level_id' => '3',
            ],
            [
                'name' => 'رسم',
                'level_id' => '3',
            ],
            [
                'name' => 'علوم',
                'level_id' => '3',
            ],
            [
                'name' => 'انجليزي',
                'level_id' => '3',
            ],
            [
                'name' => 'دين',
                'level_id' => '3',
            ],
            [
                'name' => 'رياضة',
                'level_id' => '3',
            ],
            [
                'name' => 'عربي',
                'level_id' => '2',
            ],
            [
                'name' => 'حساب',
                'level_id' => '2',
            ],
            [
                'name' => 'رسم',
                'level_id' => '2',
            ],
            [
                'name' => 'علوم',
                'level_id' => '2',
            ],
            [
                'name' => 'انجليزي',
                'level_id' => '2',
            ],
            [
                'name' => 'دين',
                'level_id' => '2',
            ],
            [
                'name' => 'رياضة',
                'level_id' => '2',
            ],
        ]);

        DB::table('classes')->insert([
            [
                'name' => 'ثالث-أ',
                'level_id' => '3',
            ],
            [
                'name' => 'ثالث-ب',
                'level_id' => '3',
            ],
            [
                'name' => 'الثاني-أ',
                'level_id' => '2',
            ],
            [
                'name' => 'الثاني-ب',
                'level_id' => '2',
            ],
        ]);

        DB::table('periods')->insert([
            [
                'name' => 'الاولى',
                'number' => '1',
                'time' => '7:00',
            ],
            [
                'name' => 'الثانية',
                'number' => '2',
                'time' => '7:45',
            ],
            [
                'name' => 'الثالثة',
                'number' => '3',
                'time' => '8:30',
            ],
            [
                'name' => 'الرابعة',
                'number' => '4',
                'time' => '9:30',
            ],
            [
                'name' => 'الخامسة',
                'number' => '5',
                'time' => '10:15',
            ],

        ]);

        DB::table('student_class')->insert([
            [
                'student_id' => '1',
                'class_semester_id' => '1',
            ],
            [
                'student_id' => '2',
                'class_semester_id' => '2',
            ],
            [
                'student_id' => '1',
                'class_semester_id' => '3',
            ],
            [
                'student_id' => '2',
                'class_semester_id' => '4',
            ],
        ]);


        DB::table('schedule')->insert([
            [
                'period_id' => '1',
                'day' => '1',
                'class_semester_id' => '1',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
            [
                'period_id' => '2',
                'day' => '1',
                'class_semester_id' => '2',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
            [
                'period_id' => '3',
                'day' => '1',
                'class_semester_id' => '2',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
            [
                'period_id' => '4',
                'day' => '2',
                'class_semester_id' => '2',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
            [
                'period_id' => '5',
                'day' => '3',
                'class_semester_id' => '1',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
            [
                'period_id' => '2',
                'day' => '1',
                'class_semester_id' => '1',
                'teacher_id' => '1',
                'subject_id' => '1',
            ],
        ]);

        DB::table('class_semester')->insert([
            [
                'class_id' => '1',
                'teacher_id' => '1',
                'semester_id' => '1',
            ],
            [
                'class_id' => '2',
                'teacher_id' => '2',
                'semester_id' => '1',
            ],
            [
                'class_id' => '1',
                'teacher_id' => '1',
                'semester_id' => '2',
            ],
            [
                'class_id' => '2',
                'teacher_id' => '2',
                'semester_id' => '2',
            ],
        ]);

        // DB::table('teacher_subject_class')->insert([
        //     [
        //         'teacher_id' => '1',
        //         'subject_id' => '3',
        //         'class_id' => '1',
        //     ],
        //     [
        //         'teacher_id' => '2',
        //         'subject_id' => '4',
        //         'class_id' => '1',
        //     ],
        // ]);
    }
}
