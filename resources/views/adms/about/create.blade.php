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
<form  enctype="multipart/form-data" method="post" action="{{ route('about.store')}}"  id="form1" runat="server">
    @csrf

    <div class="mb-3">
        <label class="form-label" for="about_text">
            О себе
        </label>
        <textarea class="form-control" id="about_text" name="about_text" rows="12">
            {{ old('about_text') }}
        </textarea>
    </div>

    <div class="mb-3">
        <!-- поле для загрузки файла -->
        <input name="about_img" type="file"  id="imgInp" >
            {{-- <input name="uppload" type="submit" value="загрузить"> --}}
            </input>
        </input>
    </div>


{{-- <img id="blah" src="#" alt="your image" /> --}}
    <div class="mw-10">



            <img alt="" hidden width="200px" src="#"  id="blah"/>




    </div>


    <div class="mb-3">
        <label class="form-label" for="signature">
            Подпись
        </label>
        <input aria-describedby="signature_help" class="form-control" id="signature" name="signature" type="text" value="{{ old('signature') }}">
            <div class="form-text" id="signature_help">
                Подпись под картинкой
            </div>
        </input>
    </div>

    <div class="mb-3">
        <label class="form-label" for="keywords">
            Ключевые словосочетания
        </label>
        <input aria-describedby="keywords_help" class="form-control" id="keywords" name="keywords" type="text" value="{{ old('keywords') }}">
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
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
        // $('#blah').show();
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $('#blah').attr('hidden',false);
});

</script>


@endsection