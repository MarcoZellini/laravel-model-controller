@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @forelse($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header h-100">
                            <h5>Title: {{ $movie->title }}</h4>
                        </div>
                        <img src="https://picsum.photos/200/200?random={{ $movie->id }}" alt=""
                            class="img-card-top h-100">
                        <div class="card-footer h-100">
                            <h5>Date: {{ $movie->date }}</h5>
                            <h5>Vote: {{ $movie->vote }}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <p>No Films in here!</p>
            @endforelse
        </div>
    </div>
@endsection
