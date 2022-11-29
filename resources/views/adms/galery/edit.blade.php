@extends('layouts.adms',['title'=> __('adms.galery')])

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
<form action="{{ route('galery.update', $id)}}" enctype="multipart/form-data" id="form" method="post" runat="server">
    @csrf
        @method('patch')
{{--     <div class="form-check mb-3">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
            <label class="form-check-label" for="flexCheckDefault">
                публиковать
            </label>
        </input>
    </div> --}}
    <div class="mb-3">
        <input aria-describedby="title_help" class="form-control" id="title" name="title" type="text" value="{{ old('title', $title??'') }}">
            <div class="form-text" id="title_help">
Описание фото:
            </div>
        </input>
    </div>

    <div class="mb-3">
        <input id="imgInp" name="image" type="file">
    </div>
    <div class="mb-3">
        <img alt=""  id="blah" src="{{Storage::url($image) }}" width="250"/>
    </div>
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>


</form>

@endsection