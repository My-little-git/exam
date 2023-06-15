@extends('layouts.app-master')

@section('title', 'Все категории')

@section('content')

    <section id="categories">
        <div class="container-xxl">
            <h2 class="mt-5 mb-3">Все категории</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Количество товаров</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->products->count() }}</td>
                        <td>
                            <form class="d-inline" action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                @method('delete')
                                <button class="btn-link btn d-inline text-decoration-none p-0" type="submit">❌</button>
                                @csrf
                            </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Добавить категорию</a>
        </div>
    </section>

@endsection
