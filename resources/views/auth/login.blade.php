@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="container-title">Iniciar sesión</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="group">
                <label class="label">Correo electrónico</label>
                <input class="input-text" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico...">
            </div>
            <div class="group">
                <label class="label">Contraseña</label>
                <input class="input-text" type="password" name="password" required placeholder="Contraseña...">
            </div>
            <button class="update-btn" type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>
@endsection