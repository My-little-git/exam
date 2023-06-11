@extends('layouts.app-master')

@section('title', 'Профиль')

@section('content')

    <section id="profile">
        <div class="container-xxl">
            <form class="mt-5" action="{{ route('logout') }}" method="POST">
                <button type="submit" class="btn btn-danger">Выйти</button>
                @csrf
            </form>
        </div>
    </section>

@endsection
