@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/bookcrud.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('information')
    <div id="heading">
        <h1>Добавление записи о книге</h1>
    </div>

    <form action="{{route('book-confirm')}}" method="POST" class="confirm add">
        <div>
            <input name="name" type="text" placeholder="Название">
        </div>
        <div>
            <input name="price" type="text" placeholder="Цена">
        </div>
        <div>
            <input name="quantity" type="text" placeholder="Кол-во">
        </div>
        <div>
            <input name="year" type="text" placeholder="Год издания">
        </div>
        <div>
            <input name="image" type="text" placeholder="Картинка">
        </div>
        <div class="box">
            <select  name="genre">
                @foreach($genres as $el)
                    <option>{{$el->Name}}</option>
                @endforeach
            </select>
        </div>
        <div class="box">
            <select  name="pub">
                @foreach($pubs as $el)
                    <option>{{$el->Name}}</option>
                @endforeach
            </select>
        </div>
        <div class="box">
            <select  name="authors">
                @foreach($authors as $el)
                    <option>{{$el->Name}} {{$el->Surname}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <textarea rows = "5" cols = "60" name = "description"></textarea><br>
        </div>

        <div>
            <button type="submit"></button>
        </div>
        @csrf
    </form>
@endsection
