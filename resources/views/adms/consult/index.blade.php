@extends('layouts.adms',['title'=> __('adms.consults')])

@section('content')
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('consult.create') }}" name="save" value="save">
            Добавить
        </a>
    </div>
    <div class="row ">
        @foreach($consults as $consult)
        <div class="col-sm-4">
            <div class="card mb-3">
                <a href="{{ route('consult.show', $consult->id) }}"><div class="card-header">
                    {{ $consult->name }}
                </div></a>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $consult->question }}
                    </h5>
                 {{--    <p class="card-text">
                        {{ $consult->answer }}
                    </p> --}}
                    <a class="btn btn-success" href="{{ route('consult.show', $consult->id) }}">
                        Подробнее
                    </a>
                </div>
            </div>

        </div>
                @endforeach
        {{ $consults->links() }}
    </div>
@endsection