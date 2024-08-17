@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <h1>Create a New Blog Post</h1>
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="5" required></textarea>

        <input type="submit" value="Create Post">
    </form>
@endsection
