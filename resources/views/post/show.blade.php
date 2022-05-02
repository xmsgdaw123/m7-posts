@extends('layouts.app')

@section('content')

<div class="home-main">
    <div class="post">
        <div class="show-post-title">{{ $post->title }}</div>
        <div class="post-content">{{ $post->content }}</div>
    </div>
    <div class="container">
        <div class="container-title">Tags</div>
        <div class="post-tags">
            @foreach ($post->tags as $tag)
            <div class="post-tag">{{ $tag->tag }}</div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="container-title">Comentarios</div>
        @if (!$comments->isEmpty())
        <div class="comments-wrapper">
            @foreach ($comments as $comment)
            <div class="comment">
                <div class="comment-header">
                    <div class="comment-user">{{ $comment->user->username }}</div>
                    <div class="comment-date">Publicado el {{ $comment->created_at }}</div>
                </div>
                <div class="comment-text">{{ $comment->comment }}</div>
            </div>
            @endforeach
        </div>
        @else
        <div style="color: #a8a8a8;">Este post no tiene comentarios</div>
        @endif
    </div>
    <div class="container">
        <div class="container-title">Añadir comentario</div>
        <form action="{{ route('comments.store') }}" method="POST" class="form-comments">
            @csrf @method('POST')
            <input type="hidden" name="postId" id="postId" value="{{ $post->id }}" class="postIdBox">
            <textarea name="comment" class="comment-txt"></textarea>
            <button class="comment-btn" type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection