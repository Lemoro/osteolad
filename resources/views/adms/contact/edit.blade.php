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
<form action="{{ route('contact.update',0)}}" enctype="multipart/form-data" id="form1" method="post" runat="server">
    @csrf
        @method('patch')
    <div class="mb-3">
        <label class="form-label" for="phones">
            Телефон(ы):
        </label>
        <input aria-describedby="phones_help" class="form-control" id="phones" name="phones" type="text" value="{{ old('phones', $phones??'') }}">
            <div class="form-text" id="phones_help">
                если несколько, вводить через запятую (необязательно)
            </div>
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">
            E-mail:
        </label>
        <input aria-describedby="email_help" class="form-control" id="email" name="email" type="text" value="{{ old('email', $email??'') }}">
            <div class="form-text" id="email_help">
                адрес электронной почты (необязательно)
            </div>
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="address">
            Адрес:
        </label>
        <input aria-describedby="address_help" class="form-control" id="address" name="address" type="text" value="{{ old('address', $address??'') }}">
            <div class="form-text" id="address_help">
               фактический адрес клиники (необязательно)
            </div>
        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="about_site">
            О сайте
        </label>
        <textarea class="form-control" id="about_site" name="about_site" rows="3">
            {{ old('about_site',$about_site??'') }}
        </textarea>
        <div class="form-text" id="address_help">
               краткое описание сайта
            </div>
    </div>
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>
</form>
@endsection
