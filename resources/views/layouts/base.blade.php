<!doctype html>
<html lang="ru">
@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Вода</title>
        <link rel="icon" href="{{ asset('/icons/circle-solid.png') }}" type="image/png">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    </head>
@show

<body>
<div class="wrapper">
    @section('header')
        <header class="header">
            <div class="header__row">
                <div class="header__column">
                    <i class="header__arrow fa-solid fa-circle-arrow-left"></i>
                    <a class="header-logo logo" href="#">
                        Вода
                    </a>
                </div>
                <div class="header__wrapper">
                    <nav class="header-nav" id="header-nav">
                        <ul class="header-nav__list">
                            <li class="header-nav__item">
                                <a class="header-nav__link" href="/">
                                    Главная
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a class="header-nav__link" href="/create">
                                    Добавить прибор
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__avatar">
                </div>
            </div>
        </header>
    @show

    <main id="app">
        @section('content')

        @show
    </main>

    @section('footer')
        <footer id="footer" class="footer">
            <div class="footer__text text-center">
                ©2022 Вода
            </div>
        </footer>
    @show
</div>

@section('footerScript')
    <script src="https://kit.fontawesome.com/6bddbd0545.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/main.js') }}"></script>
@show
</body>

</html>
