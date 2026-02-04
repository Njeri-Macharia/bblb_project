<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $post->title }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 40px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .meta {
            color: #666;
            font-size: 12px;
            margin-bottom: 30px;
            padding: 10px;
            background: #f5f5f5;
            border-left: 4px solid #3498db;
        }
        .content {
            white-space: pre-wrap;
            font-size: 14px;
            text-align: justify;
        }
        .footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 11px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>{{ $post->title }}</h1>

    <div class="meta">
        <strong>Slug:</strong> {{ $post->slug }}<br>
        <strong>Created:</strong> {{ $post->created_at->format('F j, Y \a\t g:i A') }}<br>
        @if($post->published_at)
            <strong>Published:</strong> {{ $post->published_at->format('F j, Y \a\t g:i A') }}
        @else
            <strong>Status:</strong> Draft
        @endif
    </div>

    <div class="content">
{{ $post->content }}
    </div>

    <div class="footer">
        Generated on {{ now()->format('F j, Y \a\t g:i A') }}
    </div>
</body>
</html>
