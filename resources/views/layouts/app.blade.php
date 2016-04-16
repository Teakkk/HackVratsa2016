<!DOCTYPE html>
<!--
A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<html>
<head>
    <title>Търси работа във Враца</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="application/x-javascript">addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }</script>
    <link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel="stylesheet" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme files-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet" type="text/css">
    <!-- --font-Awesome----->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- --font-Awesome----->
</head>
<body>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <h1><a href="{{url('/')}}" class="navbar-brand">VratsaJobs</a></h1>
        </div>
        <!-- /.navbar-header-->
        <div id="bs-example-navbar-collapse-1" style="height: 1px;" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Начало</a></li>
                <li><a href="#">Обяви</a></li>
                @if (Auth::guest())
                    <li><a href="{{url('login')}}">Вход</a></li>
                    <li><a href="{{url('register')}}">Регистрация</a></li>
                @else
                    <li><a href="{{ url('profile') }}">Профил</a></li>
                    <li><a href="{{ url('logout') }}">Изход</a></li>
                @endif
                <li><a href="#">ЧЗВ</a></li>
                <li><a href="#">Контакти</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- /.navbar-collapse-->
</nav>
@yield('content')
<footer>
    <div class="container">
        <div class="copy">
            <p>VratsaJobs.tk © 2016. Design by <a href="https://p.w3layouts.com/demos/seeking/web/index.html" target="_blank">W3layouts</a></p>
        </div>
    </div>
</footer>
</body>
</html>
