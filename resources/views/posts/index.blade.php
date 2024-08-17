@extends('layouts.app')

@section('title', 'My Posts')

<link rel="stylesheet" href="{{ asset('css/posts.css') }}">

@section('content')
    <h1>My Blog Posts</h1>

    <div class="blog-list">
        @forelse ($posts as $post)
            <div class="blog-item">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post) }}" class="btn-edit">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </div>
        @empty
            <p>No blog posts available.</p>
        @endforelse
    </div>
@endsection
