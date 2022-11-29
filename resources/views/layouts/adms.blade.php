<!DOCTYPE doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <!-- CSRF Token -->
                <meta content="{{ csrf_token() }}" name="csrf-token">
                    <title>
                        {!! $title??'admin'!!}
                    </title>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
                    <!-- Scripts -->
                    <script defer="" src="{{ asset('js/app.js') }}">
                    </script>
                    <!-- Fonts -->
                    <link href="//fonts.gstatic.com" rel="dns-prefetch">
                        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
                            <!-- Styles -->
                            {{--
                            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                --}}
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    </head>
    <body>
        <div id="app">
            <div class="container">
@include('adms.navbar')

{{--             <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                            {{ Auth::user()->name }}
                        </a>

                        <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
                            </a> {{ Auth::user()->name }}
                            <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav> --}}
            <main class="py-4">
<div class="mb-3">
    <h3>
{!!$title??''!!}
    </h3>
</div>
                @yield('content')
                @yield('editor')
            </main>
        </div>
           </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
        // $('#blah').show();
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $('#blah').attr('hidden',false);
});

</script>
     @include('modal.croppie')
    </body>
</html>
