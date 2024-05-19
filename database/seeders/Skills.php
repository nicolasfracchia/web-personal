<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Skills extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'PHP', 'years' => 0, 'level' => 85],
            ['name' => 'OOP', 'years' => 0, 'level' => 85],
            ['name' => 'REST', 'years' => 8, 'level' => 85],
            ['name' => 'MySQL', 'years' => 0, 'level' => 85],
            ['name' => 'JavaScript', 'years' => 0, 'level' => 85],
            ['name' => 'JSON', 'years' => 0, 'level' => 85],
            ['name' => 'JQuery', 'years' => 0, 'level' => 85],
            ['name' => 'AJAX', 'years' => 0, 'level' => 85],
            ['name' => 'HTML', 'years' => 0, 'level' => 70],
            ['name' => 'CSS', 'years' => 0, 'level' => 70],
            ['name' => 'Bootstrap', 'years' => 5, 'level' => 60],
            ['name' => 'GIT', 'years' => 8, 'level' => 85],
            ['name' => 'GitHub', 'years' => 8, 'level' => 70],
            ['name' => 'GitLab', 'years' => 5, 'level' => 50],
            ['name' => 'Jira', 'years' => 5, 'level' => 50],
            ['name' => 'Azure DevOps', 'years' => 1, 'level' => 30],
            ['name' => 'Symfony', 'years' => 6, 'level' => 70],
            ['name' => 'Laravel', 'years' => 5, 'level' => 70],
            ['name' => 'Wordpress', 'years' => 5, 'level' => 60],
            ['name' => 'NodeJS', 'years' => 2, 'level' => 50],
            ['name' => 'ExpressJS', 'years' => 1, 'level' => 50],
            ['name' => 'Sequelize', 'years' => 1, 'level' => 50],
            ['name' => 'IONIC', 'years' => 1, 'level' => 50],
            ['name' => 'AngularJS', 'years' => 1, 'level' => 70],
            ['name' => 'ReactJS', 'years' => 1, 'level' => 50],
            ['name' => 'React Native', 'years' => 1, 'level' => 50],
            ['name' => 'SOAP', 'years' => 3, 'level' => 40],
            ['name' => 'XML', 'years' => 3, 'level' => 75],
            ['name' => 'External API', 'years' => 8, 'level' => 85]
        ]);
    }
}
