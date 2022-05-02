@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="container-title">Editar post</div>
        <div>
            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf @method('PUT')
                <div class="group">
                    <label class="label">Título</label>
                    <input class="input-text" type="text" name="title" value="{{ $post->title }}" placeholder="Título..."><br>
                </div>
                <div class="group">
                    <label class="label">Contenido</label>
                    <textarea class="input-textarea" name="content" placeholder="Contenido...">{{ $post->content }}</textarea>
                </div>
                <button type="submit" class="update-btn">Editar</button>
            </form>
        </div>
    </div>
</div>
@endsection