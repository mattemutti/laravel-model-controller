@extends('layouts.app')


@section('content')
    <h1>hello</h1>
    <div class="container">
        <div class="row">
            @forelse ($movies as $index => $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $movie->title }}</h3>
                            <p class="">{{ $movie->original_title }} </p>
                            <p class="">{{ $movie->nationality }} </p>
                            <p class="">{{ $movie->date }} </p>
                            <p class="">{{ $movie->vote }} </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>No Movie here, sorry.</p>
                </div>
            @endforelse
        </div>
    </div>
    </div>
@endsection
