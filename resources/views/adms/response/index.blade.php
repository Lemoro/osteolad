@extends('layouts.adms',['title'=> __('adms.responses')])

@section('content')
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('response.create') }}" name="save" value="save">
            Добавить
        </a>
    </div>
    <div class="row ">
        @foreach($responses as $response)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-header">
                    {{ $response->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $response->question }}
                    </h5>
                 {{--    <p class="card-text">
                        {{ $response->answer }}
                    </p> --}}
                    <a class="btn btn-success" href="{{ route('response.show', $response->id) }}">
                        Подробнее
                    </a>
                </div>
            </div>

        </div>
                @endforeach
     {{ $responses->links() }}
    </div>
@endsection