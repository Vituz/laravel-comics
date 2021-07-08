@extends('layout.app')

@section('Title', 'comics')

@section('content')

<section class="container">

    <h3 class="main_text">current series</h3>
    ddd

    <div class="card_container">

        @foreach($data as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <h2>{{$comic['title']}}</h2>

        </div>
        @endforeach
    </div>

</section>


@endsection