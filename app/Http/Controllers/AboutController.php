<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(): View
    {
        $aboutMe = DB::table('about_me')->find();
        return view('components.about', compact('aboutMe'));
    }
}
