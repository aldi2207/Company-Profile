<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ListContactController extends Controller
{
    public function index()
    {
        $data = contact::all();
        return view('/listcontact', compact('data'));
    }
}
