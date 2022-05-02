@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-title">Editar perfil</div>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        <div class="group">
            <label class="label" for="username">Nombre</label>
            <input class="input-text" type="text" name="username" placeholder="Nombre..." value="{{ $user->username }}">
        </div>
        <div class="group">
            <label class="label" for="email">Correo electrónico</label>
            <input class="input-text" type="email" name="email" placeholder="Email..." value="{{ $user->email }}">
        </div>
        <button class="update-btn" type="submit">Actualizar</button>
    </form>
</div>
<div class="container">
    <div class="container-title">Cambiar contraseña</div>
    <form action="{{ route('updatePassword',  $user) }}" method="POST">
        @csrf @method('PUT')
        <div class="group">
            <label class="label" for="password">Contraseña nueva</label>
            <input class="input-text" type="password" name="password" placeholder="Contraseña nueva...">
        </div>
        <button class="update-btn" type="submit">Actualizar</button>
    </form>
</div>
@endsection