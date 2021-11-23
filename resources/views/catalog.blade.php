@extends('layouts.app')

@section('maincss')
    <link rel="stylesheet" href="../css/app.css" type="text/css">
    <link rel="stylesheet" href="../css/filters.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('information')
    <div id="heading">
        <h1>КАТАЛОГ</h1>
    </div>
    <aside>
        <div class="filterbox">
            <label class="labelfilter">Жанр</label>
            <div class="box">
                <select>
                    <option>Все жанры</option>
                    @foreach($genres as $el)
                        <option>{{$el->Name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Издатель</label>
            <div class="box">
                <select>
                    <option>Все издатели</option>
                    @foreach($pubs as $el)
                        <option>{{$el->Name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Автор</label>
            <div class="box">
                <select>
                    <option>Все авторы</option>
                    @foreach($authors as $el)
                        <option>{{$el->Name}} {{$el->Surname}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Цена</label>
            <p>
                <label >&nbsp&nbspот&nbsp;
                    <input id="inputfilter"  type="text"  value="" autocomplete="off" placeholder="{{$minPrice}}" size="4">
                </label>
                <label >до&nbsp;
                    <input id="inputfilter" type="text"  value="" autocomplete="off" placeholder="{{$maxPrice}}" size="4">
                </label>
                <button id="buttonfilter">Применить</button>
            </p>
        </div>



    </aside>
    <section>
        <div class="d1">
            <form method="get" action="{{route('search')}}">
                <input type="text" name="s" placeholder="{{$s}}">
                <button  class="btn btn-info" type="submit"></button>
            </form>
        </div>
        <div class="team-row">
            @foreach($books as $el)
                <figure>
                    <img src="{{$el->Image}}" width="200" height="300" alt="">
                    <figcaption>
                        <a href="{{route('book', $el->IdBook)}}">{{$el->Name}}</a>
                        <span>{{$el->author->Surname}} {{$el->author->Name}}</span>
                        <span>{{$el->publisher->Name}}, {{$el->Year}} г.</span>
                        <span>{{$el->Price}} руб.</span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
        {{$books->links('pagination::bootstrap-4')}}
    </section>
@endsection





