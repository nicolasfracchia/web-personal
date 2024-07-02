<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\AboutMe;

class AboutController extends Controller
{
    public function showAbout(): View
    {
        $aboutMe = AboutMe::all();
        return view('components.about', compact('aboutMe'));
    }
}
