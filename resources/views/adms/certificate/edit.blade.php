@extends('layouts.adms',['title'=> __('adms.certificate')])

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
<form action="{{ route('certificate.update', $id)}}" enctype="multipart/form-data" id="form" method="post" runat="server">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label class="form-label" for="title">
            Название сертификата
        </label>
        <input aria-describedby="title_help" class="form-control" id="title" name="title" type="text" value="{{ old('title', $title??'') }}">
        </input>
    </div>
{{--     <div class="mb-3 w-20">
        <label for="sel1">
            Select list:
        </label>
        <select class="form-control" id="sel1">
            <option>
                1
            </option>
            <option>
                2
            </option>
            <option>
                3
            </option>
            <option>
                4
            </option>
        </select>
    </div> --}}
    <div class="mb-3">
        <input id="imgInp" name="image" type="file">
            </input>
        </input>
    </div>
    <div class="mb-3">
        <img alt="" id="blah" src="{{ Storage::url($image) }}" width="250"/>
    </div>
    <div class="mb-5">
        <button class="btn btn-primary" name="save" type="submit" value="save">
            Сохранить
        </button>
    </div>
</form>
<form action="{{ route('certificate.destroy',$id) }}" method="post" onsubmit="return confirm('Вы уверены?')">
    @csrf
                        @method('delete')
    <input class="btn btn-danger" type="submit" value="Удалить">
    </input>
</form>
@endsection
