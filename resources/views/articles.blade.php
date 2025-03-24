<!-- файл полностью создан самостоятельно -->
<!DOCTYPE html>
<html>
<head>
    <title>Статьи</title>
<meta charset="utf-8">
</head>
<body>
<h1>Список статей (старый)</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
            <h2>{{ $article->name }}</h2>
                <p>{{ $article->body }}</p>
            
            </li>
        @endforeach
    </ul>
</body>
</html>