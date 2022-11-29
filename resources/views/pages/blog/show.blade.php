@extends('layouts.pages',['title'=> __('adms.blog'), 'keywords'=> $blog->keyword,'description'=> $blog->description])

@section('content')zczxc
@isset($blog)
{{-- <div style="padding-top: 10em;"> --}}


    <div class="container">
    <a href="{{ route('main.blog.index') }}"  class="btn btn-outline-secondary btn-sm">назад</a>

            <div class="mb-3">
                {{ $blog->title }}
            </div>

            <div class="mb-3" >
                <div class="row">
                    <div class="col">
                         <img alt="" src="{{ Storage::url($blog->image) }}" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                {{ $blog->description }}
            </div>


</div>
</div>
@endisset
@endsection