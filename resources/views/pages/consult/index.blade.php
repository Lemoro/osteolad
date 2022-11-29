@extends('layouts.pages',['title'=> __('adms.consults'), 'keywords'=> __('adms.consults_key'),'description'=> __('adms.consults_desc')])


@section('content')
{{-- <div style="padding-top: 15em;"> --}}

    <div class="container">
                    <a href="{{ route('main').'/#section-consult' }}"  class="btn btn-outline-secondary btn-sm mb-5">назад</a>
   <div class="row ">
        @foreach($consults as $consult)





            <div class="col-12">
                <a href="{{ route('main.consult.show', $consult->id) }}">
                    <div class="mb-3">
                        {{ $consult->name }}
                    </div>
                </a>
                <div class="mb-3">
                    {{ $consult->question }}                    <a href="{{ route('main.consult.show', $consult->id) }}">
                        ...Подробнее
                    </a>

                </div>
                                 {{--    <p class="card-text">
                        {{ $consult->answer }}
                    </p> --}}
            </div>

        <hr class="mt-2 mb-3"/>



                @endforeach
{{ $consults->links() }}
    </div>
    </div>
</div>
@endsection
