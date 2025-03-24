<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; // ????

use App\Models\Article;

class ArticleController extends Controller
{
	
    public function index()
    {		
        $articles = Article::paginate(10);
        // Статьи передаются в шаблон  compact('articles') => [ 'articles' => $articles ]
        return view('article.index', compact('articles'));		    
	}
	public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
	
}

/*
Создалось автоматически

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
}
*/