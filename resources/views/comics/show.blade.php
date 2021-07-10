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

            <h2>{{$comic['title']}}</h2>

            <div class="buy">
                <h4>U.S. Price: <span>{{$comic['price']}}</span></h4>
            </div>

        </section>

    </div>

</div>

@endsection