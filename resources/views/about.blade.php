@extends('layout')

@section ('content')
    <div>
        <ul>
            @foreach ($news as $new)
                <li>
                    <h1>{{$new->title}}</h1>
                    <p>{{$new->description}}</p>
                    <img src="{{$new->image}}">
                </li>
                @endforeach
        </ul>
    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <div class="links">
                        <a href="{{route('add')}}">Add</a>
                        <a href="{{route('detail')}}">Details</a>
                    </div>

                </div>
@endsection
