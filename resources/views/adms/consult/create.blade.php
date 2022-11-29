@extends('layouts.adms',['title'=> __('adms.consults')])

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('consult.store')}}" enctype="multipart/form-data" id="form" method="post" runat="server">
    @csrf
    <div class="form-check mb-3">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" name="publish">
            <label class="form-check-label" for="flexCheckDefault">
                публиковать
            </label>
        </input>
    </div>

    <div class="mb-3">
        <label class="form-label" for="question">
            Вопрос специалисту:
        </label>
        <textarea class="form-control" id="question" name="question" rows="7">
            {{ old('question') }}
        </textarea>
    </div>
        <div class="mb-3">
        <label class="form-label" for="name">
           Ваше имя:
        </label>
        <input aria-describedby="title_help" class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">
            <div class="form-text" id="name_help">
                Как к Вам обращаться?
            </div>
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">
            Ваша почта ( если хотите получить ответ на почту )
        </label>
        <input aria-describedby="email_help" class="form-control" id="email" name="email" type="email" value="{{ old('email') }}">
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="answer">
            Ответ
        </label>
        <textarea class="form-control" id="answer" name="answer" rows="7">
            {{ old('answer') }}
        </textarea>
    </div>

         <div class="mb-3">
        <label class="form-label" for="keyword">
            Ключевые словосочетания
        </label>
        <input aria-describedby="keyword_help" class="form-control" id="keyword" name="keyword" type="text" value="{{ old('keyword') }}">
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">
            краткое описание
        </label>
        <textarea class="form-control" id="description" name="description" rows="3">
            {{ old('description') }}
        </textarea>
    </div>

    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>


</form>

    @endsection