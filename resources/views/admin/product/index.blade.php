@extends('layouts.app-master')

@section('title', 'Все товары')

@section('content')

    <section id="products">
        <div class="container-xxl">
            <h2 class="mt-5 mb-3">Все товары</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Модель</th>
                        <th scope="col">Страна-производитель</th>
                        <th scope="col">Остаток</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                @foreach($products as $product)

                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><a href="{{ route('admin.product.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->model->name }}</td>
                        <td>{{ $product->country->name }}</td>
                        <td>{{ $product->amount }}</td>
                        <td><a href="{{ route('admin.product.edit', $product->id) }}" class="text-decoration-none">✎</a></td>
                        <td>
                            <form class="d-inline" action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                @method('delete')
                                <button class="btn-link btn d-inline text-decoration-none p-0" type="submit">❌</button>
                                @csrf
                            </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Добавить товар</a>
        </div>
    </section>

@endsection
