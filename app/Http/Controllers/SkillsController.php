<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Skills;

class SkillsController extends Controller
{
    public function showSkills(): View
    {
        $skills = Skills::all();
        return view('components.skills', compact('skills'));
    }
}