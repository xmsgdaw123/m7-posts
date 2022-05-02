@extends('layouts.app')

@section('content')

<div class="home-main">
    <div class="container">
        <div class="container-title">Crear post</div>
        <form action="{{ route('posts.store', $user) }}" method="POST">
            @csrf @method('POST')
            <div class="group">
                <div class="label">Título</div>
                <input class="input-text" type="text" name="title" placeholder="Título...">
            </div>
            <div class="group">
                <div class="label">Contenido</div>
                <textarea class="input-textarea" name="content" placeholder="Contenido..."></textarea>
            </div>
            <div class="group">
                <div class="label">Tags</div>
                <input class="input-text" type="text" name="tags" placeholder="Tags separados por espacios">
            </div>
            <button type="submit" class="update-btn">Enviar</button>
        </form>
    </div>
</div>
@endsection