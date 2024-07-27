<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExperienceItems extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experience_items')->insert([
            // Full-Stack Software Developer - Freelance & Independent Contractor
            ['experience_id' => 1, 'item' => "Engaged with previous and prospective clients to maintain and increase the portfolio"],
            ['experience_id' => 1, 'item' => "Developed and maintained new features for an educational system (Figaro - https://cys.com.ar/en/solutions/#figaro) – Short-term contract"],
            ['experience_id' => 1, 'item' => "Developed on legacy frameworks mounted on multiple Docker containers (Symfony 2 and 3)"],
            ['experience_id' => 1, 'item' => "Set working environments on Windows and Ubuntu"],
            ['experience_id' => 1, 'item' => "Developed a stock management and real-time shipment tracking system for a sublimation factory, synchronized to the factory e-commerce/check-out"],
            ['experience_id' => 1, 'item' => "Developed and maintained varied journalists’ websites and web apps specialized in different sectors (science, politics, unions)"],
            ['experience_id' => 1, 'item' => "Developed responsive websites, Content Management Systems (CMS) and apps"],
            ['experience_id' => 1, 'item' => "Integrated third-party APIs: checkout platforms, delivery trackers, Google Analytics, Twitter, Facebook, and other e-commerce platforms like WooCommerce"],
            ['experience_id' => 1, 'item' => "Configured work environments, servers, virtual machines, docker, hosting and email accounts"],
            ['experience_id' => 1, 'item' => "Defined and managed backlogs with Jira, GitHub, Microsoft Azure DevOps, and Trello"],
            ['experience_id' => 1, 'item' => "Negotiated with clients of different companies and end users"],
            // Co-founder & Full-Stack Software Developer - Proweb Solutions Net
            ['experience_id' => 2, 'item' => "Administered clients’ specifications to determine development workflows"],
            ['experience_id' => 2, 'item' => "Performed backlogs to accomplish cohesive results with the web design team"],
            ['experience_id' => 2, 'item' => "Worked in collaboration with the design area to provide intuitive and cohesive implementations (front and back-end)"],
            ['experience_id' => 2, 'item' => "Developed customer-oriented implementations and support, such as intuitive front and back-end solutions for small and medium-sized clients"],
            ['experience_id' => 2, 'item' => "Engaged with and educated clients of different technical knowledge"],
            ['experience_id' => 2, 'item' => "Participated in meetings with prospective and current clients to explain different solutions "],
            ['experience_id' => 2, 'item' => "Responsive websites with e-commerce integrations"],
            ['experience_id' => 2, 'item' => "Mobile applications for Android and iOS"],
            ['experience_id' => 2, 'item' => "Content Management Systems (CMS)"],
            ['experience_id' => 2, 'item' => "Intranets and Extranets"],
            ['experience_id' => 2, 'item' => "Google and social networks’ APIs"],
            ['experience_id' => 2, 'item' => "Third-party APIs"],
            ['experience_id' => 2, 'item' => "Generation of new APIs for external use"],
            ['experience_id' => 2, 'item' => "Integration with checkout platforms"],
            // Senior Full-Stack Software Developer - BDT Group SRL
            ['experience_id' => 3, 'item' => "Interacted and negotiated with different technical-level clients from other IT companies"],
            ['experience_id' => 3, 'item' => "Worked with SCRUM methodologies"],
            ['experience_id' => 3, 'item' => "Collaborated with cross-functional teams"],
            ['experience_id' => 3, 'item' => "Directly reported to the firm’s CEO, IT director, and scrum master"],
            ['experience_id' => 3, 'item' => "Trained new team members about the firm’s systems, scope, and medium and long-term goals"],
            ['experience_id' => 3, 'item' => "Enhanced the firm’s systems’ processing speed by 20% by upgrading PHP and MySQL versions, and code refactoring to adjust deprecated functions"],
            ['experience_id' => 3, 'item' => "Improved insurance policy reports generation by 60% through queries optimization with no structural modifications, and implemented vanilla JavaScript for graphic and numerical real-time reports"],
            ['experience_id' => 3, 'item' => "Laid out and developed the company's new look and feel "],
            ['experience_id' => 3, 'item' => "Maintained, optimized, and developed new features for a comprehensive communication system with discontinued technologies (Dojo Toolkit). New UX/UI and integration with Facebook, Telegram, Asterisk SMS, and Twitter APIs"],
            ['experience_id' => 3, 'item' => "Developed an integrated system for insurance companies based on our APIs, integration of client APIs, and consumption from different endpoints (web, app, intranet)"],
            ['experience_id' => 3, 'item' => "Created a mobile app for insurance and energy firms implemented with Apache Cordova, device’s hardware, and used different libraries and APIs"],
            ['experience_id' => 3, 'item' => "Developed new features for insurance companies' CMS (Qnect). Used Java and Velocity"],
            // Semi-Senior Full-Stack Software Developer - DOMO Solutions SRL
            ['experience_id' => 4, 'item' => "Worked on front and back-end development using HTML, CSS, JavaScript, jQuery, AJAX, and MySQL to implement Content Management Systems."],
            ['experience_id' => 4, 'item' => "Used Zen Framework, Drupal, and WordPress for small clients"],
            ['experience_id' => 4, 'item' => "Integrated SOAP web servers from government agencies to use them on their websites"],
            ['experience_id' => 4, 'item' => "Worked with the firm’s clients to change functionalities on their current systems, such as front-end and UX/UI improvements, adding features, fixing bugs, etc"],
        ]);
    }
}
