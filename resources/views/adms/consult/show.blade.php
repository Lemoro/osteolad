@extends('layouts.adms',['title'=> __('adms.consults')])

@section('content')
<div class="mb-3">
    <a class="btn btn-primary" href="{{ route('consult.create') }}" name="save" value="save">
        Добавить
    </a>
</div>

        <div class="card">
            <div class="card-header">
                {{ $consult->name }}
            </div>
            <div class="card-body">
                <span class="text-primary">Вопрос:</span>
                <h5 class="card-title">
                    {{ $consult->question }}
                </h5>
                <span class="text-success">Ответ:</span>
                <p class="card-text">
                    {{ $consult->answer }}
                </p>
                <div class="card-footer text-muted">
            <div class="row ">
                <div class="col">
                <a class="btn btn-success" href="{{ URL::previous() }}">
                    Назад
                </a>
                </div>
                <div class="col">
                <a class="btn btn-warning" href="{{ route('consult.edit', $consult->id) }}">
                    Редактировать
                </a>
                </div>

                <div class="col">
                <form action="{{ route('consult.destroy',$consult->id) }}" method="post" onsubmit="return confirm('Вы уверены?')" class="inline">
                    @csrf
                        @method('delete')
                    <input class="btn btn-danger inline" type="submit" value="Удалить">
                    </input>
                </form>
                </div>
            </div>
</div>
            </div>
        </div>


    @endsection
