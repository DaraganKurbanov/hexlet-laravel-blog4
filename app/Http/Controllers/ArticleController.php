<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

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
	
	// редактирование
	public function edit($id)
	{
    	$article = Article::findOrFail($id);
	    return view('article.edit', compact('article'));
	}
	
	// Вывод формы
    public function create()
    {
        // Передаем в шаблон вновь созданный объект. Он нужен для вывода формы
        $article = new Article();
        return view('article.create', compact('article'));
    }
	
	
	
	public function store(Request $request) // Обработчик данных формы
    {
        // Проверка введенных данных
        // Если будут ошибки, то возникнет исключение
        // Иначе возвращаются данные формы

			
        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ]);


        $article = new Article();
        // Заполнение статьи данными из формы
        $article->fill($data);
        // При ошибках сохранения возникнет исключение
        $article->save();

        // Редирект на указанный маршрут
        return redirect()
            ->route('articles.index');
    }

	public function update(Request $request, $id)
	{
		
    	$article = Article::findOrFail($id);
		
	    $data = $request->validate([
	        // У обновления немного измененная валидация
	        // В проверку уникальности добавляется название поля и id текущего объекта
	        // Если этого не сделать, Laravel будет ругаться, что имя уже существует
	        'name' => "required|unique:articles,name,{$article->id}",
	        'body' => 'required|min:100',
	    ]);
		
	    $article->fill($data);
	    $article->save();
		
	    return redirect()
    	    ->route('articles.index');
		
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