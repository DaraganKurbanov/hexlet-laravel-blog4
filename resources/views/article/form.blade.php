﻿@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Форма редактирования</h1>
{{  html()->label('Имя', 'name') }}
{{  html()->input('text', 'name') }}
{{  html()->label('Содержание', 'body') }}
{{  html()->textarea('body') }}
