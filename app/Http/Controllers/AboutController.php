<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class Aboutcontroller extends Controller
{
    public function index()
    {
        $aboutData = About::take(3)->orderby('id', 'asc')->get();
        return view('about')->with('aboutData', $aboutData);
    }
}
