@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    <h1>Editing Post</h1>
    <form method="post" action="/posts/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="examoleInputEmail1">Title</label>
            <input type="text" class="form-control" area-describedby="emailHelp" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="examoleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        <input type="submit">
    </form>
    
    <a href="/posts/{{ $post->id }}">Show</a>
    <a href="/posts">Back</a>
@endsection