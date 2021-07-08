<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'DC Comics')</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <!-- Header -->
    <header class="site_header">

        <div class="top_header">
            <div class="container">
                <a href="#">dc power visa &reg;</a>
                <a href="#">additional dc sites <i class="fas fa-sort-down"></i> </a>
            </div>
        </div>

        <nav class="nav_menu container">
            <div class="logo">
                <img src="{{asset('img/dc-logo.png')}}" alt="Site logo">
            </div>

            <div class="menu">

                @foreach($menu as $item)


                <div class="item {{ Route::currentRouteName() === $item ? 'active' : ''}}">
                    <a href="{{ route('comics') }}"> {{ $item }} </a>

                    @if($loop->last)
                    <i class="fas fa-sort-down"></i>
                    @endif
                </div>

                @endforeach

            </div>
            <div class="search">
                <form action="search" method="get">
                    <input type="search" placeholder="Search">
                </form>
            </div>
        </nav>

        <div class="jumbotron">
            <img src="{{asset('img/jumbotron.jpg')}}" alt="Jumbo image">
        </div>

    </header>
    <!-- /Header -->

    <!-- Main -->
    <main id="site_main">
        @yield('content')
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <footer id="site_footer">

    </footer>
    <!-- /Footer -->


    <!-- VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</body>

</html>