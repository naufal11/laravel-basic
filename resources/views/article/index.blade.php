@extends('layouts.app')

@section('content')
    <h1>Welcome to Index Page!</h1>
    {{-- <a href="/article/create" class="btn btn-primary">New Article+</a> --}}

    <div class="card-article mt-3">
        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title"> Title: {{ $article['title'] }} </h5>
                    <p class="card-text">{{ $article['subject'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-3">
        {{ $articles->links() }}
    </div>

@endsection