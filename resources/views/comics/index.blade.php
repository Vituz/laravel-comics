@extends('layout.app')

@section('title', 'Comics')

@section('content')

<section class="container">

    <h3 class="main_text">current series</h3>

    <div class="card_container">

        @foreach($data as $index => $comic)
        <div class="card">

            <a href="{{route('comic', ['id' => $index ])}}">
                <img src="{{$comic['thumb']}}" alt="">
                <h2>{{$comic['series']}}</h2>
            </a>
        </div>
        @endforeach
    </div>

</section>


@endsection