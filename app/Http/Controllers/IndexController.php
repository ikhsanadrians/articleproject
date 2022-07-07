<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        $articles = Article::latest()->get();
        return view('articles.index',compact('articles'));
    }
  
}