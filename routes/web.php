<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillsController;
 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (
    AboutController $aboutController, 
    ExperienceController $experienceController,
    EducationController $educationController,
    SkillsController $skillsController
) {
    return view('index', [
        'about' => $aboutController->showAbout(),
        'experience' => $experienceController->showExperience(),
        'education' => $educationController->showEducation(),
        'skills' => $skillsController->showSkills(),
        'experienceSM' => $experienceController->experienceInfo(),
        'educationSM' => $educationController->educationInfo()
    ]);
});