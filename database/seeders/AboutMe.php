<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMe extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_me')->insert([
            ['paragraphs' => "I am a highly adaptable Full-Stack Developer with over 14 years of experience crafting web applications, backend systems, and mobile solutions. Throughout my career, I've honed my skills in resource optimization, fostering collaboration within cross-functional teams, and independently mastering new technologies. My experience spans diverse fields, from e-commerce platforms to enterprise applications in insurance, medical, and energy sectors, along with a strong foundation in building user-friendly websites."],
            ['paragraphs' => "This extensive experience has equipped me with the ability to tackle a wide range of projects, seamlessly integrating front-end and back-end development while remaining adaptable to new challenges. I am a strong advocate for collaborative development and possess a genuine passion for continuous learning, ensuring I can stay at the forefront of the ever-evolving tech landscape."]
        ]);
    }
}
