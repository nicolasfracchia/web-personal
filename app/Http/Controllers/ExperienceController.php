<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Experience;

class ExperienceController extends Controller
{
    public function showExperience(): View
    {
        $experience = Experience::with('experienceItems')->get();
        return view('components.experience', compact('experience'));
    }
    public function experienceInfo(): Collection
    {
        return Experience::all();
    }
}
