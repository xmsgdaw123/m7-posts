@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="container-title">Mis posts</div>
        <div class="posts-wrapper">
            @foreach ($posts as $post)
            <div class="main-post">
                <div class="post-title">{{ $post->title }}</div>
                <div class="post-content">{{ $post->content }}</div>
                <div class="wrapped-buttons">
                <a class="update-btn" href="{{ route('posts.edit', $post) }}">Editar</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" value="Delete" class="btn-delete">Eliminar</button>
                </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection