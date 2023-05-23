@extends('layouts.app')

@section('content')
    <section class="conatiner">
        <h1> {{ $movie->title }} </h1>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
    </section>
@endsection
