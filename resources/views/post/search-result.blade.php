@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-title">Resultado de la búsqueda</div>
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