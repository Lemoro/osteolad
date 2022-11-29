<!DOCTYPE html>
<html lang="en">
<head>
  <title>{!!$title??''!!}</title>
  <meta charset="utf-8">
    <meta name="description" content="{{ $description??'osteolad' }}">
  <meta name="keywords" content="{{ $keywords??'osteolad' }}">
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


@include('pages.navbar')
    <div class="container">
      <div class="mb-3 pt-5 mt-5"  style="padding-top: 15em;">
    <h3>
{!!$title??''!!}
    </h3>
</div>
@yield('content')
</div>
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