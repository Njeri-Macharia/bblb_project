@extends('posts.layout')

@section('title', 'Edit Post')

@section('content')
    <div class="card">
        <h1>Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                    <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content *</label>
                <textarea id="content" name="content" required>{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="published_at">Publish Date (optional)</label>
                <input type="datetime-local" id="published_at" name="published_at"
                       value="{{ old('published_at', $post->published_at?->format('Y-m-d\TH:i')) }}">
                @error('published_at')
                    <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
                <small style="color: #666; display: block; margin-top: 0.25rem;">
                    Leave empty to keep as draft
                </small>
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn">Update Post</button>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
