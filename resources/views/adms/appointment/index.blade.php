@extends('layouts.adms',['title'=> __('adms.appointments')])

@section('content')
    <div class="mb-3">
{{--         <a class="btn btn-primary" href="{{ route('appointment.create') }}" name="save" value="save">
            Добавить
        </a> --}}
    </div>
    <div class="row ">
        @foreach($appointments as $appointment)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-header">
                                    {{ $appointment->created_at }}

                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    {{ $appointment->phone }}
                    </h5>
{{--                     <p class="card-text">
                        {{ $appointment->messages }}
                    </p> --}}
                    <a class="btn btn-success" href="{{ route('appointment.show', $appointment->id) }}">
                        Подробнее
                    </a>
                </div>
            </div>


        </div>
                @endforeach
    </div>

    {{ $appointments->links() }}

@endsection