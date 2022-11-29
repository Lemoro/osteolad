@section('navbar')
<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

  <div class="container">
    <div class="row align-items-center">

     <div class="col-11 col-xl-2 site-logo">
      <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><img src="/images/logo.png" alt="" height="45"></a></h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">

      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li><a href="/#section-home" class="nav-link">Главная</a></li>
          <li class="has-children">
            <a href="/#section-about" class="nav-link">О себе</a>
            <ul class="dropdown">
              <li><a href="/#section-certificates" class="nav-link">Дипломы и свидетельства</a></li>
              <li><a href="/#section-activity" class="nav-link">Виды деятельности</a></li>
              <li><a href="/#section-response" class="nav-link">Отзывы</a></li>
            </ul>
          </li>
          <li><a href="/#section-consult" class="nav-link">Вопросы</a></li>
          <li><a href="/#section-galery" class="nav-link">Галерея</a></li>
          <li><a href="/#section-blog" class="nav-link">Блог</a></li>
          <li><a href="/#section-contact" class="nav-link">Контакты</a></li>
        </ul>
      </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

  </div>

</div>
</div>

</header>