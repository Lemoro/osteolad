@extends('layouts.pages',['title'=> __('adms.activity'), 'keywords'=> $activity->keyword,'description'=> $activity->description])

@section('content')zczxc
@isset($activity)
{{-- <div style="padding-top: 10em;"> --}}


    <div class="container">
    <a href="{{ route('main.activity.index') }}"  class="btn btn-outline-secondary btn-sm">назад</a>

            <div class="mb-3">
                {{ $activity->title }}
            </div>

            <div class="mb-3" >
                <div class="row">
                    <div class="col">
                         <img alt="" src="{{ Storage::url($activity->image) }}" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                {{ $activity->text }}
            </div>


</div>
</div>
@endisset
@endsection