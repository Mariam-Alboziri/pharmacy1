
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Pharmative &mdash')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">


    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}


    @stack('css')
</head>

<body>

       <!-- loader  -->
      {{-- <div>
        <div class="loader"><img src="/images/loading.gif" alt="" /></div>
    </div> --}}
    <!-- end loader -->


    {{-- @include('partials.sidebarnos') --}}

    {{-- @if(session()->has('message'))
    <div class="container">
        <div class="alert alert-{{ session('message-type','info') }} alert-dismissible fadeshow " role="alert">
            {{ session('message') }}
        </div>
    </div>

    @endif --}}
        @yield('content')




    </div>


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>

    <script src="/js/main.js"></script>
    @stack('js')
</body>

</html>
