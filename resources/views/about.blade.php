@extends('layout')

@section ('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <div class="links">
                        <a href="{{route('add')}}">Add</a>
                        <a href="{{route('detail')}}">Details</a>
                    </div>

                </div>
@endsection
