@extends('layouts.adms',['title'=> __('adms.certificate')])

@section('content')

<a href="{{ route('certificate.create') }}" class="btn btn-primary" name="save"  value="save">
        Добавить
    </a>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

    @if (isset($id)) {{ $id }}
    <input type="hidden" value="{{ $id }}">
    @endif
<div class="row row-cols-5">

@foreach( $certificates as $certificate)
    <div class="col">
<a href="{{ route('certificate.edit', $certificate->id) }}">
    <div class="mb-3">

        <label class="form-label" for="title">
            {{ $certificate->title }}
        </label>
    </div>
    <div class="mb-3">
        <img alt="" width="250" src="{{ Storage::url($certificate->image) }}"/>
    </div>
</a>
                  <form action="{{ route('certificate.destroy',$certificate->id) }}" method="post" onsubmit="return confirm('Вы уверены?')" >
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
</div>
@endforeach
        {{ $certificates->links() }}
</div>





@endsection