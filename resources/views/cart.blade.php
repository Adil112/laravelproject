
@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="..\css\cart.css" type="text/css">
    <link rel="stylesheet" href="..\css\fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://kit.fontawesome.com/55bd70fc93.js" crossorigin="anonymous"></script>
@endsection
@section('information')
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
                                <img src="{{$br->book->Image}}" width="150" height="250" alt="">
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
@endsection


