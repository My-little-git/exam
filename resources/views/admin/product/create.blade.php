@extends('layouts.app-master')

@section('title', 'Создание товара')

@section('content')

    <section id="create-product">
        <div class="container-xxl">
            <h2 class="mt-5 mb-3">Добавление товара</h2>
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="images" class="form-label">Фотографии*</label>
                    <input
                        multiple
                        required
                        name="images[]"
                        type="file"
                        value="{{ old('images') }}"
                        class="form-control @error('images') is-invalid @enderror"
                        id="images">
                    @error('images')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
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
                <div class="mb-3">
                    <label for="price" class="form-label">Цена*</label>
                    <input
                        required
                        name="price"
                        type="number"
                        value="{{ old('price') }}"
                        min="0"
                        max="300000"
                        class="form-control @error('price') is-invalid @enderror"
                        id="price">
                    @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Год производства</label>
                    <input
                        name="year"
                        type="number"
                        value="{{ old('year') }}"
                        min="1940"
                        max="{{ date("Y") }}"
                        class="form-control @error('year') is-invalid @enderror"
                        id="year">
                    @error('year')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категория*</label>
                    <select
                        name="category_id"
                        required
                        id="category"
                        class="form-select @error('category_id') is-invalid @enderror">

                        <option disabled {{ !old('category_id') ? "selected" : "" }}>-- Выберите категорию --</option>

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id') === $category->id ? "selected" : "" }}>{{ $category->name }}</option>

                        @endforeach

                    </select>
                    @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Модель*</label>
                    <select
                        name="model_id"
                        required
                        id="model"
                        class="form-select @error('model_id') is-invalid @enderror">

                        <option disabled {{ !old('model_id') ? "selected" : "" }}>-- Выберите модель --</option>

                        @foreach($models as $model)

                            <option value="{{ $model->id }}"
                                {{ old('model_id') === $model->id ? "selected" : "" }}>{{ $model->name }}</option>

                        @endforeach

                    </select>
                    @error('model_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Страна-производитель*</label>
                    <select
                        name="country_id"
                        required
                        id="country"
                        class="form-select @error('country_id') is-invalid @enderror">

                        <option disabled {{ !old('country_id') ? "selected" : "" }}>-- Выберите страну-производитель --</option>

                        @foreach($countries as $country)

                            <option value="{{ $country->id }}"
                                {{ old('country_id') === $country->id ? "selected" : "" }}>{{ $country->name }}</option>

                        @endforeach

                    </select>
                    @error('country_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Количество на складе*</label>
                    <input
                        required
                        name="amount"
                        type="number"
                        value="{{ old('amount') }}"
                        class="form-control @error('amount') is-invalid @enderror"
                        id="amount">
                    @error('amount')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Описание</label>
                    <textarea name="description" class="form-control" id="description" style="height: 100px">{{ old('description') }}</textarea>
                    @error('description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
                @csrf
            </form>
        </div>
    </section>

@endsection
