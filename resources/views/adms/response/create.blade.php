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
<form action="{{ route('response.store')}}" enctype="multipart/form-data" id="form1" method="post" runat="server" >
    @csrf




    <div class="form-check  ">
        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value=""  name="publish">
            <label class="form-check-label" for="flexCheckDefault">
                публиковать
            </label>
        </input>
    </div>

    <div class="mb-3  ">
        <label class="form-label" for="text">
           Ваш отзыв:
        </label>
        <textarea class="form-control" id="text" name="text" rows="7">
            {{ old('text') }}
        </textarea>
    </div>
        <div class="mb-3">
        <label class="form-label" for="name">
           Ваше имя:{{ $errors->first('name')??'' }}
        </label>
        <input aria-describedby="title_help" class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">

        </input>
    </div>
 <div class="mb-3">
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>
</div>

</form>

    @endsection