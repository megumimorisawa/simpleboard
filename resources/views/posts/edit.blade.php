@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    <h1>Editing Post</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/posts/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="examoleInputEmail1">Title</label>
            <input type="text" class="form-control" area-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
        </div>
        <div class="form-group">
            <label for="examoleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        <input type="submit">
    </form>
    
    <a href="/posts/{{ $post->id }}">Show</a>
    <a href="/posts">Back</a>
@endsection