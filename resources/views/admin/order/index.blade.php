@extends('layouts.app-master')

@section('title', 'Все заказы')

@section('content')

<section id="orders">
    <div class="container-xxl">
        <h2 class="mt-5 mb-3">Все заказы</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-mail</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($orders as $order)

                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->user->email }}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection
