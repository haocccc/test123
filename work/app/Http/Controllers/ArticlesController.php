<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function show($id)
    {
        $article = article::find($id);

        return view('articles.show',['article' => $article]);
    }

    public function create(){
        return view('articles.create');
    }


    public function store(Request $request){
        $content = $request ->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        auth()->user()->articles()->create($content);
        return redirect('posts')->with('notice','新增成功！');
    }

    public function edit($id){
        $article = auth()->user()->articles->find($id);
        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request,$id){
        $article = auth()->user()->articles->find($id);
        $content = $request ->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $article->update($content);
        return redirect('posts')->with('notice','更新成功！');
    }

    public function destroy($id){
        $article = auth()->user()->articles->find($id);
        $article->delete();
        return redirect('posts')->with('notice','刪除成功！');
    }
}
