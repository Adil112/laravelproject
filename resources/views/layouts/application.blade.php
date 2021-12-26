<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Whitesquare</title>
    @yield('maincss')
    <link rel="stylesheet" href="../css/fh.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://kit.fontawesome.com/55bd70fc93.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <a href="/"><img src="../images/logo.png" alt="Whitesquare logo"> </a>
        </div>

        <div class="auth">
            @auth
                <a href="{{route('get-logout')}}"><span class="fas fa-sign-out-alt"></span></a>
            @endauth
            <div style="vertical-align: top">
                @guest
                    <a href="{{route('login')}}"><span class="fas fa-sign-in-alt"></span></a>
                    <a href="{{route('register')}}"><span class="far fa-user-circle"></span></a>
                @endguest

                <a href="{{route('cart')}}"><span class="fas fa-shopping-bag"></span></a>
            </div>

        </div>
    </header>
    <nav>
        <ul class="top-menu">
            <li><a href="{{route('myhome')}}">ГЛАВНАЯ</a></li>
            <li><a href="{{route('catalog')}}">КАТАЛОГ</a></li>
            <li><a href="{{route('support')}}">ПОМОЩЬ</a></li>
            <li><a href="{{route('contacts')}}">КОНТАКТЫ</a></li>
            <br/>
            @auth
                @if(Auth::user()->IdRole === 1 || Auth::user()->IdRole === 2)
                <li><a href="{{route('allrequest')}}">ЗАКАЗЫ</a></li>
                <li><a href="{{route('user')}}">Пользователи</a></li>
                    @endif
            @endauth
        </ul>
    </nav>
    <div>
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{session()->get('warning')}}</p>
            @endif
    </div>
    @yield('information')

</div>
<footer>
    <div id="footer">
        <div id="sitemap">
            <h3>КАРТА САЙТА</h3>
            <div>
                <a href="{{route('myhome')}}">ГЛАВНАЯ</a>
                <a href="{{route('catalog')}}">КАТАЛОГ</a>
            </div>
            <div>
                <a href="{{route('support')}}">ПОМОЩЬ</a>
                <a href="{{route('contacts')}}">КОНТАКТЫ</a>
            </div>
        </div>
        <div id="social">
            <h3>СОЦИАЛЬНЫЕ СЕТИ</h3>
            <a href="/" class="social-icon twitter"></a>
            <a href="/" class="social-icon facebook"></a>
            <a href="/" class="social-icon google-plus"></a>
            <a href="/" class="social-icon-small vimeo"></a>
            <a href="/" class="social-icon-small youtube"></a>
            <a href="/" class="social-icon-small flickr"></a>
            <a href="/" class="social-icon-small instagram"></a>
            <a href="/" class="social-icon-small rss"></a>
        </div>
        <div id="footer-logo">
            <a href="/"><img src="../images/footer-logo.png" alt="Whitesquare logo"></a>
            <p>Copyright © 2021 Whitesquare.</p>
        </div>
    </div>
</footer>
</body>
</html>
