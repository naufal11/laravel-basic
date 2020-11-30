<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function show($slug)
    {
        die($slug);
        return view('single');
    }
}
