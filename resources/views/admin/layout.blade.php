<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href="/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{asset('/img/logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Music-house / Панель администратора
                  </a>
                </div>
              </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href={{route('about')}}>О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href={{route('catalog')}}>Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href={{route('contacts')}}>Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{route('categories.index')}}>Категории товаров</a>
                </li>
                <a href="{{route('auth.logout')}}" class="btn btn-outline btn-primary">Выход</a>

            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        @if (session('info'))
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            {{session('info')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
        </div>
        @endif
        @yield('content')
    </div>

    <footer class="container mt-5">
        <div class="border-top border-secondary text-center">
            @Все права принадлежат Demo
        </div>
    </footer>

    <script src="/js/bootstrap.js"></script>
</body>
</html>
