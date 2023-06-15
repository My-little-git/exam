@extends('layouts.auth-master')

@section('title', 'Вход в админку')

@section('content')

    <section id="login" class="auth">
        <div class="container-xxl">
            <div class="row">
                <div class="mx-auto col-6">
                    <h2 class="mb-4">Вход в админку</h2>
                    <form method="POST" action="{{ route('admin.login_process') }}">
                        <div class="mb-3">
                            <label for="login" class="form-label">Логин</label>
                            <input
                                name="login"
                                value="{{ old('login') }}"
                                placeholder="ivan2000"
                                pattern="^[A-Za-z0-9]+$"
                                type="text"
                                class="@error('login') is-invalid @enderror form-control"
                                id="login">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Пароль</label>
                            <input
                                name="password"
                                type="password"
                                class="@error('password') is-invalid @enderror form-control"
                                id="password">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Войти</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
