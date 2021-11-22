<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Whitesquare</title>
    @yield('maincss')
    <link rel="stylesheet" href="../css/fh.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <a href="/"><img src="../images/logo.png" alt="Whitesquare logo"> </a>
        </div>
        <div class="auth">
            <a href="{{route('authorization')}}"><img src="../images/user.png" width="40" height="40"></a>
            <a href="{{route('cart')}}"><img src="../images/shopping-cart.png" width="40" height="40"></a>
        </div>
    </header>
    <nav>
        <ul class="top-menu">
            <li><a href="{{route('home')}}">ГЛАВНАЯ</a></li>
            <li><a href="{{route('catalog')}}">КАТАЛОГ</a></li>
            <li><a href="{{route('allrequest')}}">ЗАКАЗЫ</a></li>
            <li><a href="{{route('support')}}">ПОМОЩЬ</a></li>
            <li><a href="{{route('contacts')}}">КОНТАКТЫ</a></li>
        </ul>
    </nav>

    @yield('information')

</div>

<footer>
    <div id="footer">
        <div id="sitemap">
            <h3>КАРТА САЙТА</h3>
            <div>
                <a href="{{route('home')}}">ГЛАВНАЯ</a>
                <a href="{{route('catalog')}}">КАТАЛОГ</a>
                <a href="{{route('allrequest')}}">ЗАКАЗЫ</a>
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
