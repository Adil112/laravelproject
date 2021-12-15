
@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/requestconfirm.css" type="text/css">
    <link rel="stylesheet" href="../css/fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://kit.fontawesome.com/55bd70fc93.js" crossorigin="anonymous"></script>
@endsection
@section('information')
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
            <div class="address">
                <input name="phone" type="text" placeholder="Номер телефона">
            </div>
            <div class="box">
                <select name="option">
                    @foreach($pays as $el)
                            <option>{{$el->Name}}</option>
                    @endforeach
                </select>
            </div>
                <p class="mybutton"><button type="submit">Оформить</button></p>
                @csrf
        </form>
    </div>

@endsection
