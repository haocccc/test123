<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class myblog extends Controller
{
    public function index(){
        return view('menu.myblog');
    }
    public function works(){
        return view('menu.works');
    }
    public function posts(){
        $articles = Article::with('user')->orderBy('id','desc')->paginate(5);
        return view('menu.posts',['articles'=>$articles]);
    }
}
