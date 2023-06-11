@extends('layouts.auth-master')

@section('title', 'Регистрация')

@section('content')

    <section id="register" class="auth">
        <div class="container-xxl">
            <div class="row">
                <div class="mx-auto col-6">
                    <form method="POST" action="{{ route('register_process') }}" novalidate>
                        <h3 class="mb-4">Регистрация</h3>
                        <div id="authCarousel" class="carousel slide carousel-fade" data-bs-touch="false">
                            <div class="carousel-inner overflow-visible">
                                <div class="carousel-item
                                    @error('name', 'surname', 'patronymic') active @enderror
                                    @if(!$errors->any()) active @endif"
                                    data-interval="9000">
                                    <div class="mb-3">
                                        <label for="surname" class="form-label">Фамилия*</label>
                                        <input
                                            name="surname"
                                            value="{{ old('surname') }}"
                                            placeholder="Иванов"
                                            pattern="^[А-ЯЁ][а-яё]+$"
                                            type="text"
                                            class="@error('surname') is-invalid @enderror form-control"
                                            id="surname"
                                            required>
                                        <div class="invalid-feedback"></div>
                                        @error('surname')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Имя*</label>
                                        <input
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Иван"
                                            pattern="^[А-ЯЁ][а-яё]+$"
                                            type="text"
                                            class="@error('name') is-invalid @enderror form-control"
                                            id="name"
                                            required>
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="patronymic" class="form-label">Отчество</label>
                                        <input
                                            name="patronymic"
                                            value="{{ old('patronymic') }}"
                                            placeholder="Иванович"
                                            pattern="^[А-ЯЁ][а-яё]+$"
                                            type="text"
                                            class="@error('patronymic') is-invalid @enderror form-control"
                                            id="patronymic">
                                        @error('patronymic')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('login') }}">Войти</a>
                                        <button type="button" class="next-slide btn btn-primary">Дальше</button>
                                    </div>
                                </div>
                                <div class="carousel-item
                                @error('login', 'email') active @enderror"
                                data-interval="9000">
                                    <div class="mb-3">
                                        <label for="login" class="form-label">Логин</label>
                                        <input
                                            name="login"
                                            value="{{ old('login') }}"
                                            placeholder="ivan2000"
                                            pattern="^[A-Za-z][A-Za-z0-9]+$"
                                            type="text"
                                            class="@error('login') is-invalid @enderror form-control"
                                            id="login"
                                            required>
                                        @error('login')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="ivan@mail.ru"
                                            type="email"
                                            class="@error('email') is-invalid @enderror form-control"
                                            id="email"
                                            required>
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="prev-slide btn btn-link p-0">Назад</button>
                                        <button type="button" class="next-slide btn btn-primary">Дальше</button>
                                    </div>
                                </div>
                                <div class="carousel-item
                                @error('password', 'password_confirmation') active @enderror">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Пароль</label>
                                        <input
                                            name="password"
                                            type="password"
                                            class="@error('password') is-invalid @enderror form-control"
                                            id="password"
                                            required>
                                        @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Повторите пароль</label>
                                        <input
                                            name="password_confirmation"
                                            type="password"
                                            class="@error('password_confirmation') is-invalid @enderror form-control"
                                            id="password"
                                            required>
                                        @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="prev-slide btn btn-link p-0">Назад</button>
                                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
