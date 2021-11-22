<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Whitesquare</title>
    <link rel="stylesheet" href="../css/book.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <a href="/"><img src="../images/logo.png" alt="Whitesquare logo"> </a>
        </div>
        <div class="auth">
            <a href="/authorization"><img src="../images/user.png" width="40" height="40"></a>
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
        <h1>ИНФОРМАЦИЯ О КНИГЕ</h1>
    </div>
    <div class="content">
        <div class="image">
            <img src="{{$book->Image}}" width="200" height="300" alt="">
        </div>
        <div class="info">
            <p>
                Название: {{$book->Name}}
            </p>
            <p>
                Автор: {{$book->author->Name}} {{$book->author->Surname}}
            </p>
            <p>
                Жанр: {{$book->genre->Name}}
            </p>
            <p>
                Оценка: {{$book->Mark}}
            </p>
            <p>
                Издатель: {{$book->publisher->Name}}
            </p>
            <p>
                Год издания: {{$book->Year}} г.
            </p>

        </div>
        <div class="req">
            <p>
                Цена: {{$book->Price}} руб.
            </p>
            <p>
                Доступно: {{$book->Quantity}} шт.
            </p>
            <p class="filter">
                <div style="margin-left: 10px;">
                   Количество:
                </div>
                <div class="box">
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
            </div>
            </p>
            <p>
                <button>Добавить в корзину</button>
            </p>
        </div>
    </div>
    <div class="des">
        <p>Описание</p>
        <p>{{$book->Description}}</p>
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
