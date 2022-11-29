@section('modal')

<div class="modal fade" id="modal_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ __('main.form_response') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form action="{{ route('api.response.store') }}"  method="post" id="response">
    @csrf
<div id="errors_response"></div>
    <div class="col">
        <label class="form-label" for="text">
           Ваш отзыв:
        </label>
      <textarea class="form-control is-invalid" id="validationTextarea"  required rows="7" name="text">
            {{ old('text') }}
        </textarea>
    </div>
    <div class="col">
        <label class="form-label" for="name">
           Ваше имя:
        </label>
        <input aria-describedby="title_help" class="form-control  " id="name" name="name" type="text" value="{{ old('name') }}" required>
        </input>
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button class="btn btn-primary" id="btn_save_response">Сохранить</button>

      </div>
</form>


    </div>
  </div>
</div>
</div>
{{-- end modal response --}}

<div class="modal fade" id="modal_consult" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ __('main.form_consult') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form action="{{ route('api.consult.store') }}"  method="post" id="consult">
    @csrf
<div id="errors_consult"></div>

<div class="mb-3">
        <label class="form-label" for="question">
            Вопрос специалисту:
        </label>
        <textarea class="form-control" id="question" name="question" rows="7">
            {{ old('question') }}
        </textarea>
    </div>
        <div class="mb-3">
        <label class="form-label" for="name">
           Ваше имя:
        </label>
        <input aria-describedby="title_help" class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">

        </input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">
            Ваша почта ( если хотите получить ответ на почту )
        </label>
        <input aria-describedby="email_help" class="form-control" id="email" name="email" type="email" value="{{ old('email') }}">
        </input>
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button class="btn btn-primary" id="btn_save_consult">Сохранить</button>

      </div>
</form>


    </div>
  </div>
</div>
</div>
{{-- end modal response --}}
