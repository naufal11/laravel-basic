<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['title'=> 'First title', 'subject'=> 'This is first content'],
            ['title'=> 'Second title', 'subject'=> 'This is second content'],
            ['title'=> 'Third title', 'subject'=> 'This is third content'],
        ];

        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        return view('article.single', compact('slug'));
    }
}
