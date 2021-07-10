@extends('layout.app')

@section('title', 'Comic')

@section('content')

<div class="container">

    <div class="comic_image">
        <span>comic book</span>
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <span><a href="">view gallery</a></span>
    </div>

</div>

@endsection