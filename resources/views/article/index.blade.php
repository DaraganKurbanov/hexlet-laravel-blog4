@extends('layouts.app')

@section('content')
    <h1>Список статейффф</h1>
    @foreach ($articles as $article)
    
	    <a href="{{ route('articles.show', $article) }}"> {{-- ссылка на статью --}}
    
        <h2>{{$article->name}}</h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        
        </a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
