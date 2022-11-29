@extends('layouts.adms',['title'=> __('adms.activity')])

@section('content')

<a class="btn btn-primary" href="{{ route('activity.create') }}" name="save" value="save">
    Добавить
</a>
<div class="row row-cols-5">
    @foreach($activitys as $activity)
    <div class="col">
        <a href="{{ route('activity.edit', $activity->id) }}">
            <div class="mb-3">
                {{ $activity->title }}
            </div>
            <div class="mb-3">

                {{ Str::limit($activity->description, 150, '(...)') }}
            </div>
            <div class="mb-3">
                <img alt="" src="{{ Storage::url($activity->image) }}" width="250"/>
                <form action="{{ route('activity.destroy',$activity->id) }}" method="post" onsubmit="return confirm('Вы уверены?')">
                    @csrf
                        @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                    </input>
                </form>
            </div>




        </a>
    </div>
    @endforeach
        {{ $activitys->links() }}
</div>

@endsection