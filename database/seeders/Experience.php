<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Experience extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experience')->insert([
            [
                'id' => 1,
                'position' => "Full-Stack Software Developer ",
                'company' => "Freelance & Independent Contractor",
                'location' => "Buenos Aires, Argentina",
                'description' => "",
                'from' => "2019-08-01",
                'to' => "2022-02-01",
            ],[
                'id' => 2,
                'position' => "Co-founder & Full-Stack Software Developer",
                'company' => "Proweb Solutions Net",
                'location' => "Buenos Aires, Argentina",
                'description' => "Design and software development agency for varied clients (Companies, SMEs, NGOs and individuals).",
                'from' => "2018-01-01",
                'to' => "2019-08-01",
            ],[
                'id' => 3,
                'position' => "Senior Full-Stack Software Developer",
                'company' => "BDT Group SRL",
                'location' => "Buenos Aires, Argentina",
                'description' => "IT firm dedicated to software development and software factories for the insurance, public energy, and health sectors.",
                'from' => "2014-11-01",
                'to' => "2019-05-01",
            ],[
                'id' => 4,
                'position' => "Semi-Senior Full-Stack Software Developer",
                'company' => "DOMO Solutions SRL",
                'location' => "Buenos Aires, Argentina",
                'description' => "Web design and development agency also specialized in Digital Marketing solutions.",
                'from' => "2011-11-01",
                'to' => "2014-07-01",
            ]
        ]);
    }
}
