@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/apphome.css" type="text/css">
    <link rel="stylesheet" href="../css/filters.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('information')
    <div id="heading">
        <h1>КАТАЛОГ</h1>
    </div>
    <form method="get" action="{{route('search')}}">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <aside class="asides">
                    <div class="filterbox">
                        <label class="labelfilter">Жанр</label>
                        <div class="box">
                            <select  name="genre">
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
                            <select name="pub">
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
                            <select name="author">
                                <option>Все авторы</option>
                                @foreach($authors as $el)
                                    <option >{{$el->Name}} {{$el->Surname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="filterbox">
                        <label class="labelfilter">Цена</label>
                        <p>
                            <label >&nbsp&nbspот&nbsp;
                                <input id="inputfilter"  type="text" name="minprice" value="" autocomplete="off" placeholder="{{$minPrice}}" size="4">
                            </label>
                            <label >до&nbsp;
                                <input id="inputfilter" type="text"  name="maxprice" value="" autocomplete="off" placeholder="{{$maxPrice}}" size="4">
                            </label>
                        </p>
                    </div>



                </aside>
            </div>
            <div class="col-9">
                <section>
                    @auth
                        <p> Скачать каталог в JSON формате
                            <a href="{{route('CatalogDownload')}}"><span class="fas fa-file-download"></span></a> </p>
                    @endauth
                    <div class="d1">
                            <div class="search-box">
                                <div class="search1">
                                    <input type="text" name="s" placeholder="{{$s}}">
                                </div>
                                <div class="search2">
                                    <button  class="btn btn-info" type="submit">Поиск</button>
                                </div>
                                @auth
                                    <a href="{{route('bookadd')}}"><span class="fas fa-plus-square"></span></a>
                                @endauth
                            </div>
                    </div>
                    <div class="team-row">
                        @foreach($books as $el)
                            <figure>
                                <img src="{{$el->Image}}" width="170" height="270" alt="">
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

            </div>

        </div>
    </div>
    </form>


@endsection





