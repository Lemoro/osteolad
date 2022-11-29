@extends('layouts.pages',['title'=> __('adms.response'), 'keywords'=> __('adms.response_key'),'description'=> __('adms.response_desc')])


@section('content')
{{-- <div style="padding-top: 15em;"> --}}

    <div class="container">
            <a href="{{ route('main').'/#section-response' }}"  class="btn btn-outline-secondary btn-sm mb-3">назад</a>
        @foreach($responses as $response)
        <div class="row mb-5">
{{--             <div class="col-4">
                <div class="mb-3">
                    <a href="{{ route('main.response.show', $response->id) }}">
                        <img alt="" src="{{ Storage::url($response->image) }}" width="250"/>
                    </a>
                </div>
            </div> --}}
            <div class="col-12">
                {{-- <a href="{{ route('main.response.show', $response->id) }}"> --}}
                    <div class="mb-3">
                        {{ $response->name }}
                    </div>
                {{-- </a> --}}
                <div class="mb-3">
                    {{ $response->text }}

                </div>
            </div>
        </div>
        <hr class="mt-2 mb-3"/>
        @endforeach
        {{ $responses->links() }}
    </div>
</div>
@endsection
