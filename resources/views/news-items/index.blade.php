@extends('layout')


@section ('content')

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="row">
            @foreach($newsItems as $newsItem)
                <div class="col-sm card border-0">
                    <h2 class="card-title">{{$newsItem['title']}}</h2>
                    <p class="card-text">{{$newsItem['description']}}</p>
                    <img class="card-img" src="{{$newsItem['image']}}">
                    <a class="btn btn-light" href="{{route('news.show', $newsItem["id"])}}">Lees meer</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <div class="links">
                        <a href="{{route('about')}}">About</a>
                        <a href="{{route('add')}}">Add</a>
                    </div>
@endsection
