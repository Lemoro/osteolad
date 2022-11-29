@extends('layouts.adms',['video_url'=> __('adms.video')])

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
                {{ $video_url??'' }}
            </div>
<form action="{{ route('video.update','1')}}" enctype="multipart/form-data" id="form1" method="post" runat="server">
    @csrf
        @method('patch')
    <div class="mb-3">
        <input aria-describedby="video_url_help" class="form-control" id="video_url" name="video_url" type="text" value="{{ old('video_url', $video_url??'') }}">
            <div class="form-text" id="video_url_help">
                УРЛ адрес видео:
            </div>
        </input>
    </div>
    <div class="mb-3">
    <button class="btn btn-primary" name="save" type="submit" value="save">
        Сохранить
    </button>
    </div>
</form>
@endsection
