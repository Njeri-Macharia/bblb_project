@extends('posts.layout')

@section('title', $post->title)

@section('content')
    <div class="card">
        <h1>{{ $post->title }}</h1>

        <div class="post-meta">
            Created {{ $post->created_at->format('F j, Y \a\t g:i A') }}
            @if($post->published_at)
                • Published {{ $post->published_at->format('F j, Y \a\t g:i A') }}
            @else
                • <strong>Draft</strong>
            @endif
        </div>

        <div class="post-content">{{ $post->content }}</div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Back to Posts</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn">Edit</a>
            <a href="{{ route('posts.pdf', $post) }}" class="btn" style="background: #27ae60;">Export PDF</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;"
                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
