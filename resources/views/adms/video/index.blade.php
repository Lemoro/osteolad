@extends('layouts.adms',['title'=> __('adms.video')])

@section('content')
<div class="row">
    <div class="col">
        @isset($video_url)
        <div class="mb-3">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe allowfullscreen="" class="embed-responsive-item" src="{{ $video_url??'' }}">
                </iframe>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('video.edit', $id) }}" name="save" value="save">
            Изменить
        </a>
        <form action="{{ route('video.destroy', $id) }}" method="post" onsubmit="return confirm('Вы уверены?')">
            @csrf
                        @method('delete')
            <input class="btn btn-danger" type="submit" value="Удалить">
            </input>
        </form>
        @else
        <a class="btn btn-primary" href="{{ route('video.create') }}" name="save" value="save">
            Добавить
        </a>
        @endif
    </div>
</div>
@endsection
