@extends('layouts.app')

@section('content')

<div class="home-main">
    <h1 class="home-main-title">Posts App</h1>
    <div class="home-main-description">Aplicación de posts</div>
    <h1 class="new-posts-title">Posts nuevos</h1>
    <div class="posts-wrapper">
        @foreach ($posts as $post)
        <a class="post-link" href="/posts/{{ $post->id }}">
            <div class="main-post">
                <div class="post-title">{{ $post->title }}</div>
                <div class="post-tags">
                @foreach ($post->tags as $tag)
                    <div class="post-tag">{{ $tag->tag }}</div>
                @endforeach
                </div>
                <div class="post-content">{{ $post->content }}</div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection