@extends('layout')

@section ('content')
    <header class="jumbotron">
        <h1 class="modal-title float-left">Voeg een nieuwsbericht toe</h1>
        <a class="nav-link float-right" href="{{route('news')}}">Terug naar nieuwsoverzicht</a>
    </header>

    <div class="container">
        <form method="post" action="{{route('news.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" class="form-control" id="title" name="title"/>
            </div>

            <div class="form-group">
                <label for="description">Beschrijving:</label>
                <input type="text" class="form-control" id="description" name="description"/>
            </div>

            <div class="form-group">
                <label for="image">Afbeelding:</label>
                <input type="text" class="form-control" id="image" name="image"/>
            </div>
            <button type="submit" class="btn-primary btn-block">Bericht opslaan</button>
        </form>
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <div class="links">
                        <a href="{{route('about')}}">About</a>
                        <a href="{{route('detail')}}">Details</a>
                    </div>
@endsection
