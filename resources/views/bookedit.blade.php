@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/bookcrud.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('information')
    <div id="heading">
        <h1>Редактирование записи о книге</h1>
    </div>

    <form action="{{route('bookEdit', $book->IdBook)}}" method="POST" class="confirm add">
        <div>
            <input name="name" type="text"  value="{{$book->Name}}">
        </div>
        <div>
            <input name="price" type="number" value="{{$book->Price}}"> руб.
        </div>
        <div>
            <input name="quantity" type="number" value="{{$book->Quantity}}">  шт.
        </div>
        <div>
            <input name="year" type="number" value="{{$book->Year}}">  год
        </div>
        <div>
            <input name="image" type="text" value="{{"$book->Image"}}">
        </div>
        <div class="box">
            <select  name="genre">
                @foreach($genres as $el)
                    <option value="{{$el->Name}}"
                            @if ($el->IdGenre === $genreFlag)
                            selected
                        @endif
                    >{{$el->Name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="box">
            <select  name="pub">
                @foreach($pubs as $el)
                    <option value="{{$el->Name}}" @if($el->IdPublisher === $pubFlag)
                    selected
                        @endif
                    >{{$el->Name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="box">
            <select  name="authors">
                @foreach($authors as $el)
                    <option value="{{$el->Name}} {{$el->Surname}}" @if ($el->IdAuthor === $authFlag)
                    selected
                        @endif
                    >{{$el->Name}} {{$el->Surname}}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <textarea rows = "5" cols = "60" name = "description">{{$book->Description}}</textarea><br>
        </div>

        <div>
            <button type="submit"></button>
        </div>
        @csrf
    </form>
@endsection
