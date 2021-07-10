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

            <ul>
                @foreach(config('comics.menu') as $item)
                <li class=" {{Route::currentRouteName() === $item['href'] ? 'active' : ''}}">
                    <a href="{{route($item['href'])}}">{{$item['text']}}</a>
                    @if($loop->last)
                    <i class="fas fa-sort-down"></i>
                    @endif
                </li>



                @endforeach
            </ul>


        </div>
        <div class="search">
            <form action="search" method="get">
                <input type="search" placeholder="Search  ">
                <i class="fas fa-search"></i>
            </form>
        </div>
    </nav>

    <div class="jumbotron">

    </div>

</header>