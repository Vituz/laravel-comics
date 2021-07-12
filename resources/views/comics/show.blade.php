@extends('layout.app')

@section('title', 'Comic')

@section('content')

<span class="blue_line"></span>

<div class="bg_white">

    <div class="container">

        <div class="comic_image">
            <span>{{$comic['type']}}</span>
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <span><a href="">view gallery</a></span>
        </div>


        <!-- Comic discription -->
        <section class="comic_desc">

            <h5>advertisement</h5>

            <div class="desc">
                <section>
                    <!-- Comic Title -->
                    <h2>{{$comic['title']}}</h2>

                    <!-- Comic price -->
                    <div class="buy">
                        <div class="price">
                            <h4>U.S. Price: <span>{{$comic['price']}}</span></h4>
                            <h4>available</h4>
                        </div>
                        <div class="check">
                            <a href="#">
                                Check Availability
                                <i class="fas fa-sort-down"></i>
                            </a>
                        </div>
                    </div>

                    <p>
                        {{$comic['description']}}
                    </p>
                </section>

                <a href="#">
                    <img src="../img/adv.jpg" alt="Advertisement image">
                </a>
            </div>

        </section>

    </div>

</div>

@endsection