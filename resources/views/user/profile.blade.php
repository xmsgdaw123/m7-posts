@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="container-title">Mi perfil</div>
        <div>Nombre: {{ $user->username }}</div>
        <div>Correo electrónico: {{ $user->email }}</div>
        <div>Role: {{ $user->role->role }}</div>
    </div>
    <div class="profile-actions">
        <a href="{{ route('editProfile') }}" class="a-action a-edit">Editar</a>
        <a href="{{ route('myPosts') }}" class="a-action a-posts">Mis posts</a>
    </div>
</div>
@endsection