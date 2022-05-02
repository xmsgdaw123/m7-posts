@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-title">Dashboard</div>
    <div class="container">
        <div class="container-title">Usuarios</div>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Correo electrónico</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">
                            <button class="small-btn small-edit">Editar</button>
                        </a>
                    </td>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        @csrf @method('DELETE')
                        <td>
                            <button type="submit" class="small-btn small-delete">Eliminar</button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="container-title">Posts</div>
        <div class="posts-wrapper">

            @foreach ($posts as $post)
            <div class="main-post">
                <div class="post-title">{{ $post->title }}</div>
                <div class="post-content">{{ $post->content }}</div>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn-delete">Eliminar</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection