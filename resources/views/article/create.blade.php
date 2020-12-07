@extends('layouts.app')

@section('content')
    <h1>Make new article</h1>

    <form action="/article" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" id="subject" name="subject" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection