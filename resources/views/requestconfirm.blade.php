<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Whitesquare</title>
    <link rel="stylesheet" href="../css/requestconfirm.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <a href="/"><img src="../images/logo.png" alt="Whitesquare logo"> </a>
        </div>
        <div class="auth">
            <a href="/register"><img src="../images/user.png" width="40" height="40"></a>
            <a href="/cart"><img src="../images/shopping-cart.png" width="40" height="40"></a>
        </div>
    </header>
    <nav>
        <ul class="top-menu">
            <li><a href="/">ГЛАВНАЯ</a></li>
            <li><a href="/catalog">КАТАЛОГ</a></li>
            <li><a href="/allrequest">ЗАКАЗЫ</a></li>
            <li><a href="/support">ПОМОЩЬ</a></li>
            <li><a href="/contacts">КОНТАКТЫ</a></li>
        </ul>
    </nav>
    <div id="heading">
        <h1>ПОДТВЕРЖДЕНИЕ</h1>
    </div>

    <div class="text">
        <div>
            Итоговая сумма: <a class="num">{{$request->calculate()}}</a>
        </div><br/>
        <div>
            Кол-во товаров: {{$request->counting()}}
        </div><br/>
    </div>

    <div>
        <form action="{{route('request-confirm')}}" method="POST" class="confirm">
            <div class="address">
                <input name="address" type="text" placeholder="Адрес">
            </div>
            <div class="box">
                <select name="option">
                    @foreach($pays as $el)
                            <option>{{$el->Name}}</option>
                    @endforeach
                </select>
            </div>
                <p><button type="submit">Оформить</button></p>
                @csrf
        </form>
    </div>


</div>

<footer>
    <div id="footer">
        <div id="sitemap">
            <h3>КАРТА САЙТА</h3>
            <div>
                <a href="/">ГЛАВНАЯ</a>
                <a href="/catalog">КАТАЛОГ</a>
                <a href="/allrequest">ЗАКАЗЫ</a>
            </div>
            <div>
                <a href="/support">ПОМОЩЬ</a>
                <a href="/contacts">КОНТАКТЫ</a>
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
