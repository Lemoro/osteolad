@extends('layouts.adms',['title'=> __('adms.responses')])

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
<form action="{{ route('response.update', $response->id )}}" enctype="multipart/form-data" id="form1" method="post" runat="server">
    @csrf
    @method('patch')

    <div class="form-check mb-3">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox"
 value="" name="publish"
            {{ old('publish', $response->publish)?'checked="checked"':'' }}
        >
            <label class="form-check-label" for="flexCheckDefault">
                публиковать
            </label>
        </input>
    </div>

    <div class="mb-3">
        <label class="form-label" for="text">
            Вопрос специалисту:
        </label>
        <textarea class="form-control" id="text" name="text" rows="7">
            {{ old('text', $response->text) }}
        </textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="name">
           Ваше имя:
        </label>
        <input aria-describedby="title_help" class="form-control" id="name" name="name" type="text" value="{{ old('name', $response->name ) }}">
            <div class="form-text" id="name_help">
                Как к Вам обращаться?
            </div>
        </input>
    </div>


    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>


</form>

    @endsection