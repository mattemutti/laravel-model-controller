@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center py-5">
            <div class="col">
                <div class="card">
                    <div class="card-image text-center py-2">
                        <img src="https://picsum.photos/200" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $movies->title }}</h3>
                        <p class="">{{ $movies->original_title }} </p>
                        <p class="">{{ $movies->nationality }} </p>
                        <p class="">{{ $movies->date }} </p>
                        <p class="">{{ $movies->vote }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-title')
    {{ $movies->title }}
@endsection
