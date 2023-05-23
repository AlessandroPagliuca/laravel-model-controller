@extends('layouts.app')

@section('content')
    <section class="conatiner">

        <div class="card-c92">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </div>
        <h4 class="text-danger py-2"> {{ $movie->title }} </h4>



    </section>
@endsection
