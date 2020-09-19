@extends('layout')


@section ('content')
    <header class="jumbotron">
        @if ($newsItem)
            <h1 class="modal-title float-left">{{$newsItem['title']}}</h1>
        @endif
        <a class="nav-link float-right" href="{{route('news')}}">Terug naar het Menu</a>
    </header>

    <div class="container">
        @if($newsItem)
            <article>
                <p>{{$newsItem['description']}}</p>
                <img src="{{$newsItem['image']}}" alt="{{$newsItem['title']}}"/>
            </article>
        @endif
    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <div class="links">
                        <a href="{{route('about')}}">About</a>
                        <a href="{{route('add')}}">Add</a>
                    </div>
@endsection
