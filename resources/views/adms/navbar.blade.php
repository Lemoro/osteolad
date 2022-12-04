@section('navbar')


{{--       <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li><a href="#section-home" class="nav-link">Главная</a></li>
          <li class="has-children">
            <a href="#section-about" class="nav-link">О себе</a>
            <ul class="dropdown">
              <li><a href="#section-how-it-works" class="nav-link">Дипломы и свидетельства</a></li>
              <li><a href="#section-our-team" class="nav-link">Виды деятельности</a></li>
              <li><a href="#section-response" class="nav-link">Отзывы</a></li>
            </ul>
          </li>
          <li><a href="#section-services" class="nav-link">Вопросы</a></li>
          <li><a href="#section-industries" class="nav-link">Галерея</a></li>
          <li><a href="#section-blog" class="nav-link">Блог</a></li>
          <li><a href="#section-contact" class="nav-link">Контакты</a></li>
        </ul>
      </nav> --}}


  <div style="width: 100%; text-align: right;" class="nav-link" >
    @guest
    @else
   Админ: {{ Auth::user()->name }}
   @endguest
</div>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('about.index') }}">О себе</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('certificate.index') }}">Сертификаты</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('activity.index') }}">Виды деятельности</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('consult.index') }}">Консультации</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('response.index') }}">Отзывы</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('blog.index') }}">Блог</a>
  </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('galery.index') }}">Галерея</a>
  </li>
     <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('video.index') }}">Видео</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}">Контакты</a>
  </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('appointment.index') }}">Регистрация</a>
  </li>
{{--   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('activ') }}">Виды деятельности</a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="/" target="_blank">На сайт</a>
  </li>
  <li class="nav-item">
     <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
  </li> --}}

</ul>


</nav>