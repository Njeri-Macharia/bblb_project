@extends('posts.layout')

@section('title', 'All Posts')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn">Create New Post</a>
    </div>

    @if($posts->isEmpty())
        <div class="card">
            <p>No posts yet. <a href="{{ route('posts.create') }}">Create your first post!</a></p>
        </div>
    @else
        @foreach($posts as $post)
            <div class="card">
                <h2>
                    <a href="{{ route('posts.show', $post) }}" style="color: #2c3e50; text-decoration: none;">
                        {{ $post->title }}
                    </a>
                </h2>
                <div class="post-meta">
                    Created {{ $post->created_at->diffForHumans() }}
                    @if($post->published_at)
                        • Published {{ $post->published_at->diffForHumans() }}
                    @else
                        • <strong>Draft</strong>
                    @endif
                </div>
                <p style="margin-top: 1rem;">
                    {{ Str::limit($post->content, 200) }}
                </p>
                <div style="margin-top: 1rem;">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Read More</a>
                </div>
            </div>
        @endforeach

        <div style="margin-top: 2rem;">
            {{ $posts->links() }}
        </div>
    @endif
@endsection
