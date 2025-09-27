<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $dataArticle = article::take(4)->inRandomOrder()->get();
        return view('artikel')->with('dataArticle', $dataArticle);
    }

    public function showId($id)
    {
        $artikelId = article::findOrFail($id);
        return view('artikelId', compact('artikelId'));
    }
    public function artikelList()
    {
        $artikelList = article::all();
        return view('artikelList', compact('artikelList'));
    }
}
