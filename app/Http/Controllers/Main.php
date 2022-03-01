<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        return view('home_page');
    }
    public function Standings()
    {
        return view('standings');
    }
    public function Matches()
    {
        return view('matches');
    }
    public function Clubs()
    {
        return view('clubs');
    }
}
