@extends('layouts.adms',['title'=> __('adms.activity'), 'type'=>'circle'])

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
<form action="{{ route('activity.store')}}" enctype="multipart/form-data" id="form" method="post" runat="server">
    @csrf
    <div class="form-check mb-3">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox" name="publish" value="">
            <label class="form-check-label" for="flexCheckDefault">
                публиковать
            </label>
        </input>
    </div>
    <div class="mb-3">
        <input aria-describedby="direction_help" class="form-control" id="direction" name="direction" type="text" value="{{ old('direction') }}">
            <div class="form-text" id="direction_help">
                название вида деятельности
            </div>
        </input>
    </div>

        <div class="mb-3">
        <input aria-describedby="title_help" class="form-control" id="title" name="title" type="text" value="{{ old('title') }}">
            <div class="form-text" id="title_help">
                направление(Биодинамик, Остеокоррекция)
            </div>
        </input>
    </div>

    <div class="mb-3">
        <label class="form-label" for="text">
            Описание деятельности
        </label>
        <textarea class="form-control" id="text" name="text" rows="12">
            {{ old('text') }}
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
    <div class="mb-3">
        <input id="imgInp" name="image" type="file">
    </div>
    <div class="mb-3">
        <img alt="" hidden="" id="blah" src="#" width="250"/>
    </div>
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>

    @endsection
</form>