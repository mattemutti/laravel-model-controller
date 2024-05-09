@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse ($movies as $index => $movie)
                <div class="col">
                    <a class="text-decoration-none" href="{{ route('guests.movies.show', ['id' => $index]) }}">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $movie->title }}</h3>
                                <p class="">{{ $movie->original_title }} </p>
                                <p class="">{{ $movie->nationality }} </p>
                                <p class="">{{ $movie->date }} </p>
                                <p class="">{{ $movie->vote }} </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col">
                    <p>No Movie here, sorry.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection


@section('page-title')
    Ciuppa
@endsection
