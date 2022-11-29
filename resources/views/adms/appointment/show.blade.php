@extends('layouts.adms',['title'=> __('adms.appointments')])

@section('content')
<div class="mb-3">
    <a class="btn btn-primary" href="{{ route('appointment.create') }}" name="save" value="save">
        Добавить
    </a>
</div>
<div class="row ">
    <div class="col-sm-7">
        <div class="card mb-3">
            <div class="card-header">
                {{ $appointment->created_at }}
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    {{ $appointment->phone }}
                </h5>
                <p class="card-title">
                    {{ $appointment->first_name }}
                </p>
                <p class="card-text">
                    {{ $appointment->message }}
                </p>
            </div>
        </div>
        <div class="row ">
                <div class="col">
                <a class="btn btn-success" href="{{ URL::previous() }}">
                    Назад
                </a>
                </div>
{{--                 <div class="col">
                <a class="btn btn-warning" href="{{ route('appointment.edit', $appointment->id) }}">
                    Редактировать
                </a>
                </div> --}}

                <div class="col">
                <form action="{{ route('appointment.destroy',$appointment->id) }}" method="post" onsubmit="return confirm('Вы уверены?')" class="inline">
                    @csrf
                        @method('delete')
                    <input class="btn btn-danger inline" type="submit" value="Удалить">
                    </input>
                </form>
                </div>
            </div>
    </div>

</div>
@endsection
