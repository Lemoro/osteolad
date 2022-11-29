@extends('layouts.adms',['title'=> __('adms.responses')])

@section('content')
<div class="mb-3">
    <a class="btn btn-primary" href="{{ route('response.create') }}" name="save" value="save">
        Добавить
    </a>
</div>

        <div class="card">
            <div class="card-header">
                {{ $response->name }}
            </div>
            <div class="card-body">

                <span class="text-success">Отзыв:</span>
                <p class="card-text">
                    {{ $response->text }}
                </p>
                <div class="card-footer text-muted">
            <div class="row ">
                <div class="col">
                <a class="btn btn-success" href="{{ route('response.index', $response->id) }}">
                    Назад
                </a>
                </div>
                <div class="col">
                <a class="btn btn-warning" href="{{ route('response.edit', $response->id) }}">
                    Редактировать
                </a>
                </div>

                <div class="col">
                <form action="{{ route('response.destroy',$response->id) }}" method="post" onsubmit="return confirm('Вы уверены?')" class="inline">
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
