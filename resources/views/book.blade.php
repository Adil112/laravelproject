
@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/book.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://kit.fontawesome.com/55bd70fc93.js" crossorigin="anonymous"></script>
@endsection
@section('information')
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

            <form action="{{route('cart-add', $book->IdBook)}}" method="POST">
            <p class="filter">
                <div style="margin-left: 10px;">
                   Количество:
                </div>

                <div class="box">
                    <select name="num">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>


            <p class="mybutton">
                <button type="submit">Добавить в корзину</button>
                @csrf
            </p>
            </form>
            @auth
                <div>
                    <a href="{{route('home')}}"><span class="fas fa-edit"></span></a>
                </div>
                <div>
                    <a href="{{route('home')}}"><span class="fas fa-trash-alt"></span></a>
                </div>
            @endauth
        </div>
    </div>

    <div class="des">
        <p>Описание</p>
        <p>{{$book->Description}}</p>
    </div>
@endsection
