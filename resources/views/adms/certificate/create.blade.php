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
<form  enctype="multipart/form-data" method="post" action="{{ route('certificate.store')}}"  id="form" runat="server">
    @csrf

<div class="mb-3">
        <label class="form-label" for="title">
            Название сертификата
        </label>
        <input aria-describedby="title_help" class="form-control" id="title" name="title" type="text" value="{{ old('title', $title??'') }}">

        </input>
    </div>

    <div class="mb-3">
        <!-- поле для загрузки файла -->
        <input name="image" type="file"  id="imgInp" >
            {{-- <input name="uppload" type="submit" value="загрузить"> --}}
            </input>
        </input>
    </div>
    <img alt="" hidden width="250" src="#"  id="blah"/>





<div class="mb-5">

    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>
</div>

</form>




@endsection