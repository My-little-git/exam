@extends('layouts.app-master')

@section('title', 'Создание категории')

@section('content')

    <section id="create-category">
        <div class="container-xxl">
            <h2 class="mt-5 mb-3">Добавление категории</h2>
            <form action="{{ route('admin.category.store') }}" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Наименование*</label>
                    <input
                        required
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
                @csrf
            </form>
        </div>
    </section>

@endsection
