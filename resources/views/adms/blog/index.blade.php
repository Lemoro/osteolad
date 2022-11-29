@extends('layouts.adms',['title'=> __('adms.blog')])

@section('content')
    <div class="mb-3">
<a class="btn btn-primary" href="{{ route('blog.create') }}" name="save" value="save">
    Добавить
</a>
</div>
<div class="row">
    @foreach($blogs as $blog)
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img alt="..." class="card-img-top" src="{{ Storage::url($blog->image) }}">
                <div class="card-body">
                    <h5 class="card-title">
                         {{ $blog->title }}
                    </h5>
 {{--                    <p class="card-text">
                        {{ $blog->description }}
                    </p> --}}
                   <a class="btn btn-success" href="{{ route('blog.show', $blog->id) }}">
                        Подробнее
                    </a>
                </div>
            </img>
        </div>
    </div>

    @endforeach
        {{ $blogs->links() }}
</div>
@endsection
