@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
