@extends('layouts.pages',['title'=> __('adms.activity'), 'keywords'=> __('adms.activity_key'),'description'=> __('adms.activity_desc')])


@section('content')
<div>

    <div class="container">
            <a href="{{ route('main').'/#section-activity' }}"  class="btn btn-outline-secondary btn-sm mb-3">назад</a>
        @foreach($activitys as $activity)
        <div class="row mb-5">
            <div class="col-sm-auto">
                <div class="mb-3">
                    <a href="{{ route('main.activity.show', $activity->id) }}">
                        <img alt="" src="{{ Storage::url($activity->image) }}" width="250"/>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="{{ route('main.activity.show', $activity->id) }}">
                    <div class="mb-3">
                        {{ $activity->title }}
                    </div>
                </a>
                <div class="mb-3">
                    {{ Str::limit($activity->text, 150, '...') }}
                    <a href="{{ route('main.activity.show', $activity->id) }}">
                        читать
                    </a>
                </div>
            </div>
        </div>
        <hr class="mt-2 mb-3"/>
        @endforeach
        {{ $activitys->links() }}
    </div>
</div>
@endsection
