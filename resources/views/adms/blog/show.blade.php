@extends('layouts.adms',['title'=> __('adms.blog')])

@section('content')
    <div class="mb-3">
<a class="btn btn-primary" href="{{ route('blog.create') }}" name="save" value="save">
    Добавить
</a>
</div>



        <div class="card" >
            <img alt="{{ $blog->title }}" class="card-img-top" src="{{ Storage::url($blog->image) }}" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                         {{ $blog->title }}
                    </h5>
                    <p class="card-text">
                        {{ $blog->description }}
                    </p>
            <div class="row ">
                <div class="col">
                <a class="btn btn-success" href="{{ route('blog.index', $blog->id) }}">
                    Назад
                </a>
                </div>
                <div class="col">
                <a class="btn btn-warning" href="{{ route('blog.edit', $blog->id) }}">
                    Редактировать
                </a>
                </div>

                <div class="col">
                <form action="{{ route('blog.destroy',$blog->id) }}" method="post" onsubmit="return confirm('Вы уверены?')" class="inline">
                    @csrf
                        @method('delete')
                    <input class="btn btn-danger inline" type="submit" value="Удалить">
                    </input>
                </form>
                </div>
            </div>
                </div>
            </img>
        </div>



@endsection
