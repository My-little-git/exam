<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-xxl">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/logo/logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth('admin')
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}" class="nav-link">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link">Категории</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.order.index') }}" class="nav-link">Заказы</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.index') }}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('location') }}">Где нас найти?</a>
                    </li>
                @endauth
            </ul>
            <div class="auth-navbar">
                @auth('web')
                    <a href="{{ route('cart') }}" class="btn btn-warning me-2">Корзина</a>
                    <a href="{{ route('profile') }}" class="btn btn-dark">Профиль</a>
                @elseauth('admin')
                    <form action="{{ route('admin.logout') }}" method="POST">
                        <button type="submit" class="btn btn-danger">Выйти</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
