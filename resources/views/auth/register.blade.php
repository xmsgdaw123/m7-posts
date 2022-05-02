@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="container-title">Crear cuenta</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="group">
                    <label class="label" for="username">Nombre de usuario</label>
                    <input class="input-text" type="text" name="username" value="{{ old('nuserame') }}" required autocomplete="username" autofocus placeholder="Nombre...">
                </div>

                <div class="group">
                    <label class="label" for="username">Correo electrónico</label>
                    <input class="input-text" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico...">
                </div>

                <div class="group">
                    <label class="label">Contraseña</label>
                    <input class="input-text" type="password" name="password" required placeholder="Contraseña...">
                </div>
                <div class="group">
                    <label class="label">Repetir contraseña</label>
                    <input class="input-text" type="password" name="password_confirmation" required placeholder="Contraseña...">
                </div>

                <button class="update-btn" type="submit">Crear cuenta</button>
            </form>
        </div>
    </div>
</div>
@endsection