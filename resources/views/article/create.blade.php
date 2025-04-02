<h1>Создание статьи</h1>
{{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    {{  html()->label('Имя', 'name') }}
    {{  html()->input('text', 'name') }}
    {{  html()->label('Содержание', 'body') }}
    {{  html()->textarea('body') }}
    {{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}
