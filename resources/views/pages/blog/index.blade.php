@extends('layouts.pages',['title'=> __('adms.blog'), 'keywords'=> __('adms.blog_key'),'description'=> __('adms.blog_desc')])


@section('content')
{{-- <div style="padding-top: 15em;"> --}}

    <div class="container">
            <a href="{{ route('main').'/#section-blog' }}"  class="btn btn-outline-secondary btn-sm mb-3">назад</a>
        @foreach($blogs as $blog)
        <div class="row">
            <div class="col-sm-auto">
                <div class="mb-3">
                    <a href="{{ route('main.blog.show', $blog->id) }}">
                        <img alt="" src="{{ Storage::url($blog->image) }}" width="250"/>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="{{ route('main.blog.show', $blog->id) }}">
                    <div class="mb-3">
                        {{ $blog->title }}
                    </div>
                </a>
                <div class="mb-3">
                    {{ Str::limit($blog->description, 150, '(...)') }}
                    <a href="{{ route('main.blog.show', $blog->id) }}">
                        ...читать
                    </a>
                </div>
            </div>
        </div>
        <hr class="mt-2 mb-3"/>
        @endforeach
            {{ $blogs->links() }}
    </div>
</div>
@endsection
