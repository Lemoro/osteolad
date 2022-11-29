@extends('layouts.pages',['title'=> __('adms.consults'), 'keywords'=> $consults->keyword,'description'=> $consults->description])

@section('content')
@isset($consult)
{{-- <div style="padding-top: 10em;"> --}}


    <div class="container">
    <a href="{{ URL::previous() }}"  class="btn btn-outline-secondary btn-sm">назад</a>

            <div class="mb-3">
                {{ $consult->name }}
            </div>

            <div class="mb-3" >
                <div class="row">
                    <div class="col">
                         <img alt="" src="{{ Storage::url($consult->image) }}" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                {{ $consult->description }}
            </div>


</div>
</div>
@endisset
@endsection