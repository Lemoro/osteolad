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
<form action="{{ route('consult.update', $consult->id )}}" enctype="multipart/form-data" id="form1" method="post" runat="server">
    @csrf
    @method('patch')
    <div class="form-check mb-3">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
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
            {{ old('question', $consult->question) }}
        </textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="name">
           Ваше имя:
        </label>
        <input aria-describedby="title_help" class="form-control" id="name" name="name" type="text" value="{{ old('name', $consult->name ) }}">
            <div class="form-text" id="name_help">
                Как к Вам обращаться?
            </div>
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">
            Ваша почта ( если хотите получить ответ на почту )
        </label>
        <input aria-describedby="email_help" class="form-control" id="email" name="email" type="email" value="{{ old('email', $consult->email) }}">
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="answer">
            Ответ
        </label>
        <textarea class="form-control" id="answer" name="answer" rows="7">
            {{ old('answer', $consult->answer) }}
        </textarea>
    </div>

    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>


</form>

    @endsection