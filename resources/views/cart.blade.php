<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Whitesquare</title>

    <link rel="stylesheet" href="..\css\cart.css" type="text/css">
    <link rel="stylesheet" href="..\css\fonts.css" type="text/css">
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
        <h1>КОРЗИНА</h1>
    </div>
    <div class="rowlabel">
            <div>
                Товары добавленные в корзину
            </div>
            <div>
                Цена
            </div>
            <div>
                Количество
            </div>
            <div>
                Сумма
            </div>
            <div>
                Оформить заказ
            </div>
        </div>
    <div class="main">
        <div class="contents">
            <div class="content">

                <div class="rows">
                    @if(!is_null($request))
                    @foreach($request->books_requests as $br)
                    <div class="row">
                        <div class="book">
                            <div>
                                <img src="../images/ex.png" width="150" height="250" alt="">
                            </div>
                            <div>
                                <b><a href="/" class="name">Название: {{$br->book->Name}}</a></b>
                                <p> Автор: {{$br->book->author->Name}} {{$br->book->author->Surname}}</p>
                                <p>Жанр: {{$br->book->genre->Name}}</p>
                                <p>Издатель: {{$br->book->publisher->Name}}</p>
                                <p>Доступно: {{$br->book->Quantity}}</p>
                                <form action="{{route('cart-remove', $br->book->IdBook)}}" method="POST">
                                    <p><button type="submit" href="">Удалить</button></p>
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <div>{{$br->book->Price}}</div>
                        <div>{{$br->Quantity}}</div>
                        <div>
                            <script>
                                document.write({{$br->book->Price}} * {{$br->Quantity}})
                            </script>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

            </div>

        </div>
        <div class="req">
            <div>
                Сумма: <a class="num">{{$request->calculate()}}</a>
            </div><br/>
            <div>
                Кол-во товаров: {{$request->counting()}}
            </div><br/>
            <div>
                <form action="{{route('reqConf')}}" method="GET">
                    <p><button type="submit" href="">Оформить заказ</button></p>
                    @csrf
                </form>
            </div>

        </div>

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
