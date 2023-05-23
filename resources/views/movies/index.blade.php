@extends('layouts.app')

@section('content')
    <h3 class="text-danger text-uppercase mb-5">movies</h3>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}"
                    class="link-movie fw-semibold">{{ $movie->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
