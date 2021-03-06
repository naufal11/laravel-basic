@extends('layouts.app')

@section('content')
    <h1>Edit Article</h1>

    <form action="/article/{{ $article->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $article->title }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" id="subject" name="subject" rows="4">{{ old('subject') ? old('subject') : $article->subject }}</textarea>
            @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection