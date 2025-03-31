<h1>Редактирование</h1>
{{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
    @include('article.form')
    {{ html()->submit('Обновить')->class('btn btn-primary') }}
{{ html()->closeModelForm() }}