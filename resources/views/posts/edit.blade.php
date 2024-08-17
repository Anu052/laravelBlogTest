@extends('layouts.app')

@section('title', 'Edit Post')

<link rel="stylesheet" href="{{ asset('css/posts.css') }}">

@section('content')
    <h1>Edit Blog Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>

        <input type="submit" value="Update Post">
    </form>
@endsection
