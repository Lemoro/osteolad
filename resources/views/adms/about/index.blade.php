@extends('layouts.adms',['title'=> __('adms.about')])

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

{{--     @isset($id)
    <input type="hidden" value="{{ $id }}">
    @endisset --}}
    <div class="mb-3">


            {{ $about_text??'' }}

    </div>
    <div class="mb-3">

@isset($about_img)
    <img alt="" width="250" src="{{
    Storage::url($about_img) }}"/>
@endisset
</div>
    <div class="mb-3">

        {{ $signature??'' }}


    </div>
   @if (isset($about_text))
    <a href="{{ route('about.edit') }}" class="btn btn-primary" name="save"  value="save">
        Изменить
    </a>
    @else
    <a href="{{ route('about.create') }}" class="btn btn-primary" name="save"  value="save">
        Добавить
    </a>
    @endif
@endsection