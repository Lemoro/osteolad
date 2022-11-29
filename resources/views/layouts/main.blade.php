<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $title??'Остео~лад' }}</title>
  <meta name="description" content="{{ $description??'osteolad' }}">
  <meta name="keywords" content="{{ $keywords??'osteolad' }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="/fonts/icomoon/style.css">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

  <!--     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


  <link rel="stylesheet" href="/css/aos.css">

  <link rel="stylesheet" href="/css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


@include('navbar')
@yield('home')
@yield('about')
@yield('certificates')
@yield('activity')
@yield('consult')
@yield('galery')
{{-- @yield('video') --}}
@yield('response')
@yield('blog')
@yield('contact')
@yield('footer')

@include('modal.modal')
<!-- </div> -->

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/aos.js"></script>

<script src="/js/main.js"></script>

</body>
</html>