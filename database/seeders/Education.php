<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Education extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'title' => "ICT 889 - Full Stack Development Bootcamp (Intensive)",
                'institution' => "University of Calgary",
                'location' => "Calgary, AB, Canada",
                'from' => "2023-09-01",
                'to' => "2024-03-01",
            ],[
                'title' => "Course in React – Hooks, Router, Redux, NextJS",
                'institution' => "Udemy",
                'location' => "Distance learning",
                'from' => "2022-01-01",
                'to' => "2022-03-01",
            ],[
                'title' => "Course in Mobile App Development with React Native",
                'institution' => "EDx - Harvard University",
                'location' => "Distance learning",
                'from' => "2020-01-01",
                'to' => "2020-02-01",
            ],[
                'title' => "Course in Advanced JavaScript",
                'institution' => "IT Master Academy",
                'location' => "Buenos Aires, Argentina",
                'from' => "2015-01-01",
                'to' => "2015-03-01",
            ],[
                'title' => "Course in PHP – Object-Oriented Programming",
                'institution' => "Educacion IT",
                'location' => "Buenos Aires, Argentina",
                'from' => "2012-03-01",
                'to' => "2012-03-01",
            ],[
                'title' => "Certificate in Intermediate (B1) Certificate in General English as a Foreign Language",
                'institution' => "LAL Language Centres",
                'location' => "Paignton, United Kingdom",
                'from' => "2011-01-01",
                'to' => "2011-02-01",
            ],[
                'title' => "Web Development",
                'institution' => "A. U. B. A. Asociación Club de Programadores",
                'location' => "Buenos Aires, Argentina",
                'from' => "2010-01-01",
                'to' => "2010-10-01",
            ]
        ]);
    }
}
