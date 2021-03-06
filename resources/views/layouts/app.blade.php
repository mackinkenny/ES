<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <meta charset="UTF-8">
    <title>Almash</title>

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Forum|Lobster&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/web-fonts-with-css/css/fontawesome-all.css') }}">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="stylesheet" media="all" href="{{asset('css/animate.css')}}">

</head>
<body>

<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-menus" style="font-family: forum; text-transform: uppercase; border-bottom: 1px solid black">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/Icons/logo.png" class="img-fluid" width="110" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-lg text-light fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-3 my-md-0 mx-auto text-center">

                    <li class="nav-item ml-1 mr-1">
                        <a class="nav-link " href="/">Главная</a>
                    </li>

                    <li class="nav-item ml-1 mr-1">
                        <a href="/list" class="nav-link">Список на бартер</a>
                    </li>

                    <li class="nav-item ml-1 mr-1">
                        <a href="/partner" class="nav-link">Партнеры</a>
                    </li>

                    <li class="nav-item ml-1 mr-1">
                        <a href="/contact" class="nav-link">Контакты</a>
                    </li>

                </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/createlist">
                                        Подать объявление
                                    </a>
                                    @if(Auth::user()->status == 0)
                                    <a class="dropdown-item" href="/bid">
                                        Оставить предложение
                                    </a>
                                    @endif
                                        @if(Auth::user()->status == 1)
                                            <a class="dropdown-item" href="/admintask">
                                                Сообщения
                                            </a>
                                        @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>


            </div>
        </div>
    </nav>
</header>
<a href="/">
<div class="row pr-0 mr-0" style="border-bottom: 1px solid black;">
    <img src="/image/main1.png" class="w-100 h-100 fadeIn animated">
</div>
</a>


    {{--<div class="col-2 text-center bg-menus" style="border-right:1px solid black;">--}}
        {{--<span style="font-size:40px;">Категории</span>--}}
        {{--<ul class="menu navbar-nav my-3 my-md-0 mx-auto">--}}
            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Автомобили</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="/auto/1" style="color:black">Грузовые</a></li>--}}
                    {{--<li><a href="/auto/2" style="color:black">Легковые</a></li>--}}
                    {{--<li><a href="/auto/3" style="color:black">Внедорожники</a></li>--}}
                    {{--<li><a href="/auto/4" style="color:black">Спецтехника</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Стройматериалы </a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Квартиры</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Услуги</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Товары</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item ml-1 mr-1">--}}
                {{--<a class="nav-link txt-menu">Фирмы</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                    {{--<li><a href="" style="color:black">######################</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
@yield('content')
{{--<div class="col-2 text-center bg-menus" style="border-left:1px solid black;">--}}
    {{--<span style="font-size:40px;">Новости</span>--}}
{{--</div>--}}
<footer class="bg-footer text-muted mt-5" style="border-top: 1px solid black" >
    <div class="container">
        {{--<div class="row justify-content-center justify-content-lg-around text-center">--}}
            {{--<div class="col-12 col-lg-3 mt-3">--}}
                {{--<a href="/">--}}
                    {{--<img src="/image/barter.png" class="img-fluid" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-12 col-md-auto mt-5">--}}
                {{--<p class="h2 mb-2 txt-white">--}}
                    {{--<u>--}}
                        {{--Телефоны:--}}
                    {{--</u>--}}
                {{--</p>--}}
                {{--<address class="contacts">--}}
                    {{--<p class="txt-white">+996 (***) *** ***</p>--}}
                {{--</address>--}}
                {{--<address>--}}
                    {{--<p class="txt-white">+996 (***) *** ***</p>--}}
                {{--</address>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-auto mb-4 mb-md-0 mt-5 ">--}}
                {{--<p class="h2 mb-2 txt-white"><u>E-mail:</u></p>--}}
                {{--<a href="#" class="text-muted txt-white">Almash.kg@gmail.com</a>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-auto mt-5">--}}
                {{--<p class="h2 mb-2 txt-white"><u>Соц. сети:</u></p>--}}
                {{--<div class="small mb-4 mb-md-2  align-items-center">--}}
                    {{--<i class="fab fa-2x fa-instagram text-light"></i>&nbsp;--}}
                    {{--<a href="https://www.instagram.com/bayservice" target="_blank" class="text-muted txt-white">https://www.instagram.com/almash.kg</a>--}}
                {{--</div>--}}
                {{--<div class="small mb-4 mb-md-2 align-items-center">--}}
                    {{--<i class="fab fa-2x fa-facebook text-light"></i>&nbsp;--}}
                    {{--<a href="https://www.facebook.com/bayservice" target="_blank" class="text-muted txt-white">https://www.facebook.com/almash.kg</a>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}



        <div class="row py-5 justify-content-center small text-muted">
            <span target="_blank" class="text-muted mount-sign">Almash.kg</span>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/css/simple/jquery.maphilight.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('jquery.maphilight.min.js')}}"></script>
<script type="text/javascript">$(function() {
        $('.map').maphilight();
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/typesort.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/genplan.js') }}"></script>
<script>new WOW().init();</script>


@yield('javascripts')

</body>
</html>
