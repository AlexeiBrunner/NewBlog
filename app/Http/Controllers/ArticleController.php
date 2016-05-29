<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        return view('news');
    }
    public function create()
    {
        return view('createArticle.create');
    }
    
    public function store(ArticleRequest $request)
    {
        $request = $request->all();
        $request['user_id'] = 1;
        Article::create($request);
        session()->flash('noty', [
            'message' => 'Новость ' . array_get($request, 'title') . ' добавлена',
            'title' => 'Успех',
            'type' => 'success'
        ]);
        
        return redirect()->back();
    }

    public function comment()
    {
    	return view('comment');
    }

     public function view()
    {
        return view('auth.auth');
    }
}
