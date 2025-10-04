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

    public function detailcontact($id)
    {
        $dataId = contact::findOrFail($id);
        return view('/contactdetail', compact('dataId'));
    }
}
