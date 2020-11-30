@extends('layouts.app')

@section('content')
    <h1>Welcome to Index Page!</h1>

    @foreach ($articles as $article)
        <p><strong> Title: {{ $article['title'] }} </strong></p>
        <p>{{ $article['subject'] }}</p>
    @endforeach

@endsection