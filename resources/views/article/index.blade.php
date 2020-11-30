@extends('layouts.app')

@section('content')
    <h1>Welcome to Index Page!</h1>

    @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title"> Title: {{ $article['title'] }} </h5>
                <p class="card-text">{{ $article['subject'] }}</p>
            </div>
        </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>

@endsection