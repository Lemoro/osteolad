@extends('layouts.adms',['title'=> __('adms.contact')])

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
<div class="mb-3">
    {{ $phones??'' }}
</div>
<div class="mb-3">
    {{ $email??'' }}
</div>
<div class="mb-3">
    {{ $address??'' }}
</div>
<div class="mb-3">
    <a class="btn btn-primary" href="{{ route('contact.edit',0) }}" name="save" value="save">
        Изменить
    </a>
</div>
@endsection
