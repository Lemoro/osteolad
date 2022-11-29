@extends('layouts.adms',['title'=> __('adms.galery')])

@section('content')

<a class="btn btn-primary" href="{{ route('galery.create') }}" name="save" value="save">
    Добавить
</a>
<div class="row">
    @foreach($galerys as $galery)
    <div class="col">
        <a href="{{ route('galery.edit', $galery->id) }}">
            <div class="mb-3">
                {{ $galery->title }}
            </div>
            <div class="mb-3">
                {{ $galery->description }}
            </div>
            <div class="mb-3">
                <img alt="" src="{{ Storage::url($galery->image) }}" width="250"/>
                <form action="{{ route('galery.destroy',$galery->id) }}" method="post" onsubmit="return confirm('Вы уверены?')">
                    @csrf
                        @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                    </input>
                </form>
            </div>




        </a>
    </div>
    @endforeach
     {{ $galerys->links() }}
</div>

@endsection