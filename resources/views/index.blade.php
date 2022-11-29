@extends('layouts.main', ['keywords'=> $about->keywords??'','description'=> $about->description??'' ])

@section('home')
<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


        <h1 class="text-white font-weight-light font-weight-bold" data-aos="fade-up">Екатерина Титовская</h1>
        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Мастер
        остеопатической коррекции и биодинамики в Воронеже</p>

        <p data-aos="fade-up" data-aos-delay="200"><span class="btn btn-primary py-3 px-5 text-white"  data-toggle="modal" data-target="#modal_consult">Задать вопрос</span></p>

      </div>
    </div>
  </div>
</div>
@endsection


@section('about')
@isset($about)
<div class="site-section" id="section-about">
  <div class="container">
    <div class="row mb-5">

      <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ Storage::url($about->about_img) }}" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-md-6 order-md-1" data-aos="fade-up">
        <div class="text-left pb-1 border-primary mb-4">
          <h2 class="text-primary">О себе</h2>
        </div>
        <p>
          {{ $about->about_text }}
        </p>
      </div>

    </div>
  </div>
</div>
@endisset
@endsection


@section('certificates')

<div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_4.jpg');" id="section-certificates">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary" data-aos="fade">Сертификаты</h2>
      </div>
    </div>
    <div class="row">

@isset($certificates)
      @foreach ($certificates as $certificate)

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="{{ $loop->index+1 }}00" >
        <div class="how-it-work-item">
          <span class="number">{{ $loop->index+1 }}</span>
          <div class="how-it-work-body">
            <h2>{{ $certificate->title }}</h2>
            <p class="mb-5"> <img src="{{ Storage::url($certificate->image )}}" alt="Image" class="img-fluid rounded"></p>

          </div>
        </div>
      </div>


      @endforeach
@endisset

    </div>
  </div>
</div>
@endsection


@section('activity')
<div class="site-section border-bottom" id="section-activity">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary" data-aos="fade">Виды деятельности</h2>
      </div>
    </div>
    <div class="row  mb-5 align-items-stretch">

@isset($activitys)
      @foreach ($activitys as $activity)
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="{{ $loop->index+1 }}00">
        <div class="person">
         <a href="{{ route('main.activity.show', $activity->id) }}">
          <img src="{{ Storage::url($activity->image) }}" alt="Image" class="img-fluid">
          <h3>{{ $activity->title }}</h3>
         </a>
          <p class="position text-muted">{{ $activity->direction }}</p>
          <p class="mb-4">{{ $activity->description }}</p>

        </div>
      </div>

      @endforeach
@endisset

    </div>


    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
        <p class="mb-0"><a href="{{ route('main.activity.index') }} " class="btn  btn-outline-secondary btn-sm">Смотреть все</a></p>
      </div>
    </div>
  </div>

</div>
</div>


@endsection

@section('consult')
<div class="site-section bg-light" id="section-consult">
  <div class="container">
    <div class="row justify-content-center mb-5" data-aos="fade-up">
      <div class="col-md-7 text-center border-primary">
        <h2 class="mb-0 text-primary">Консультация</h2>
        <p class="color-black-opacity-5">Ответы на вопросы.</p>
      </div>
    </div>
    <div class="row align-items-stretch">


@isset($consults)
      @foreach ($consults as $consult)
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4  display-4">
            <i class="bi bi-question-diamond text-primary"></i>
            {{-- <i class="bi bi-chat-right text-primary"></i>  --}}
          </div>



          <div>
            <h3>{{ $consult->question }}</h3>
  {{--           <p>Чтобы Вы меньше гундели и я смог спокойно написать рецепт в тишине....</p> --}}
            <p><a href="#">Читать ответ</a></p>
          </div>
        </div>
      </div>

      @endforeach




@endisset


    </div>
  </div>


   <div class="row">
    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200" id="div_add_response">



      <p class="mb-3">
        <span id="btn_add_response" class="btn btn-primary py-3 px-5 text-white" data-toggle="modal" data-target="#modal_consult">Задать свой вопрос</span>
      </p>

      <p class="mb-0">
       <a href="{{ route('main.consult.index') }}" class="btn  btn-outline-secondary btn-sm" >Смотреть ответы</a>
      </p>

    </div>
  </div>


</div>

@endsection

@section('galery')
<div class="site-section block-13" id="section-galery">

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="mb-0 text-primary">Галерея</h2>
        <p class="color-black-opacity-5">фотогалерея</p>
      </div>
    </div>
  </div>


  <div class="owl-carousel nonloop-block-13">


@isset($galerys)
    @foreach ($galerys as $galery)
    <div>
      <a href="{{ Storage::url($galery->full_image) }}" class="unit-1 text-center">
        <img style="height: 550px;" src="{{ Storage::url($galery->image) }}" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">{{ $galery->title }}</h3>
        </div>
      </a>
    </div>
    @endforeach
@endisset


  </div>

</div>

@endsection

@section('video')
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      {{-- https://vimeo.com/channels/staffpicks/93951774 --}}
      <div class="col" data-aos="fade-up">



      <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="{{ $video->video_url??'' }}" allowfullscreen></iframe>
      </div>




      </div>


    </div>
  </div>
</div>
@endsection

@section('response')
<div class="site-section border-bottom"  id="section-response">
  <div class="container">

    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Отзывы</h2>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">


@isset($responses)
      @foreach ($responses as $response)
      <div>
<a href="" class="text-info">
        <div class="testimonial">
{{--           <figure class="mb-4">
            <img src="{{ Storage::url($response->photo) }}" alt="Image" class="img-fluid mb-3">

          </figure> --}}
          <blockquote>
            <p>&ldquo; {{ $response->text }}&rdquo;</p>
            <p class="author"> &mdash; {{ $response->name }}</p>
          </blockquote>
        </div>
</a>
      </div>
      @endforeach
@endisset

    </div>
  </div>


  <div class="row">
    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200" id="div_add_response">
      <p class="mb-3"><span id="btn_add_response" class="btn btn-primary py-3 px-5 text-white" data-toggle="modal" data-target="#modal_response">Оставить отзыв</span></p>
            <p class="mb-0">
       <a href="{{ route('main.response.index') }}" class="btn  btn-outline-secondary btn-sm" >Смотреть все отзывы</a>
      </p>
    </div>
  </div>

</div>


@endsection


@section('blog')

<div class="site-section" id="section-blog">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary" data-aos="fade-up">
        <a href="{{ route('main.blog.index') }} " >Мой Блог</a>
        </h2>
        <p class="color-black-opacity-5">Интересные статьи о здоровье</p>
      </div>
    </div>
    <div class="row ">

@isset($blogs)
      @foreach ($blogs as $blog)
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4"  data-aos="fade" data-aos-delay="{{ $loop->index+1 }}00">
        <div class="h-entry">
          <a href="{{ route('main.blog.show', $blog->id) }}"><img src="{{ Storage::url($blog->image) }}" alt="Image" class="img-fluid">
          </a>
          <h2 class="font-size-regular"><a href="{{ route('main.blog.show', $blog->id) }}">{{ $blog->title }}
          </a></h2>
          <div class="meta mb-4"> Июль 18, 2022 <span class="mx-2">&bullet;</span> </div>
          <p>  {{ Str::limit($blog->text,129,'...') }}</p>
        </div>
      </div>
      @endforeach
@endisset

    </div>


    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
        <p class="mb-0"><a href="{{ route('main.blog.index') }} " class="btn  btn-outline-secondary btn-sm">Смотреть все статьи</a></p>
      </div>
    </div>
  </div>
</div>
@endsection


@section('contact')
<div class="site-section bg-light" id="section-contact">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Контакты</h2>
        <p class="color-black-opacity-5">Контакты и запись на прием</p>
      </div>
    </div>
    <div class="row">



      <div class="col-md-7 mb-5">

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
<div id="message_appointment" class=""></div>
        <form action="{{ route('appointment.store') }}" class="p-5 bg-white" method="post" id="appointment">
    @csrf


        <p>Оставьте ваши данные и кратко опишите вашу проблему.<br>Специалист свяжется с вами как только освободится.
      </p>
          <span id="errors_appointment"></span>

          <div class="row form-group" id="appointment_hiight">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="first_name">Ваше имя</label>
              <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="text-black" for="phone">Номер телефона</label>
              <input type="text" name="phone" id="phone" class="form-control">
            </div>
          </div>

 {{--          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Предпочитаемая дата посещения специалиста</label>
             <input type="datetime-local" class="form-control">
            </div>
          </div> --}}



          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Информация о вашей проблеме:</label>
              <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Записаться на прием" class="btn btn-primary py-2 px-4 text-white">
            </div>
          </div>


        </form>
      </div>
      <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">
          <p class="mb-0 font-weight-bold">Address</p>
          <p class="mb-4">{{ $contact->address??'' }}</p>

@isset($contact->phones)
          <p class="mb-0 font-weight-bold">Телефон</p>

@foreach(explode(',', $contact->phones) as $phone)
          <p class="mb-3">{{ $phone }}</p>
@endforeach

@endisset
          <p class="mb-0 font-weight-bold">Почта</p>
          <p class="mb-0">{{ $contact->email??'' }}</a></p>

        </div>



      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <h2 class="footer-heading mb-4">О сайте</h2>
            <p>{{ $contact->about_site??'' }}</p>
          </div>

          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
               <li><a href="/#section-home" class="nav-link">Главная</a></li>
          {{-- <li > --}}
            {{-- <a href="/#section-about" class="nav-link">О себе</a> --}}
            {{-- <ul class="dropdown"> --}}
              {{-- <li><a href="/#section-certificates" class="nav-link">Дипломы и свидетельства</a></li> --}}
              <li><a href="/activity" class="nav-link">Виды деятельности</a></li>
              <li><a href="/response" class="nav-link">Отзывы</a></li>
            {{-- </ul> --}}
          {{-- </li> --}}
          <li><a href="/consult" class="nav-link">Вопросы</a></li>
{{--           <li><a href="/#section-galery" class="nav-link">Галерея</a></li> --}}
          <li><a href="/blog" class="nav-link">Блог</a></li>
          {{-- <li><a href="/#section-contact" class="nav-link">Контакты</a></li> --}}
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
{{--       <div class="col-md-3">
        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
            </div>
          </div>
        </form>
      </div> --}}
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
           {{-- <a href="http://osteolad.ru">osteolad.ru</a> --}}
         </p>
       </div>
     </div>

   </div>
 </div>
</footer>
@endsection