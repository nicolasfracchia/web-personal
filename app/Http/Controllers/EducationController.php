<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Education;

class EducationController extends Controller
{
    public function showEducation(): View
    {
        $education = Education::all();
        return view('components.education', compact('education'));
    }
}
