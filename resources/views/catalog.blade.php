@extends('layouts.app')

@section('maincss')
    <link rel="stylesheet" href="../css/app.css" type="text/css">
    <link rel="stylesheet" href="../css/filters.css" type="text/css">
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
                    <option>Комедия</option>
                    <option>Драма</option>
                    <option>Классика</option>
                    <option>История</option>
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Издатель</label>
            <div class="box">
                <select>
                    <option>Все издатели</option>
                    <option>АСТ</option>
                    <option>Феникс</option>
                    <option>Азбука</option>
                    <option>Фламинго</option>
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Автор</label>
            <div class="box">
                <select>
                    <option>Все авторы</option>
                    <option>Лев Толстой</option>
                    <option>Александр Пушкин</option>
                </select>
            </div>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Цена</label>
            <p>
                <label >&nbsp&nbspот&nbsp;
                    <input id="inputfilter"  type="text"  value="" autocomplete="off" placeholder="200" size="4">
                </label>
                <label >до&nbsp;
                    <input id="inputfilter" type="text"  value="" autocomplete="off" placeholder="5000" size="4">
                </label>
                <button id="buttonfilter">Применить</button>
            </p>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Год</label>
            <p>
                <label >&nbsp&nbspот&nbsp;
                    <input id="inputfilter"  type="text"  value="" autocomplete="off" placeholder="1965" size="4">
                </label>
                <label >до&nbsp;
                    <input id="inputfilter" type="text"  value="" autocomplete="off" placeholder="2021" size="4">
                </label>
                <button id="buttonfilter">Применить</button>
            </p>
        </div>
        <div class="filterbox">
            <label class="labelfilter">Оценка</label>
            <p>
                <label >&nbsp&nbspот&nbsp;
                    <input id="inputfilter"  type="text"  value="" autocomplete="off" placeholder="0" size="4">
                </label>
                <label >до&nbsp;
                    <input id="inputfilter" type="text"  value="" autocomplete="off" placeholder="5" size="4">
                </label>
                <button id="buttonfilter">Применить</button>
            </p>
        </div>

    </aside>
    <section>
        <div class="d1">
            <form>
                <input type="text" placeholder="Искать книгу...">
                <button  type="submit"></button>
            </form>
        </div>
        <div class="team-row">
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/book">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
        </div>
        <div class="team-row">
            @foreach($data as $el)
                <figure>
                    <img src="{{$el->Image}}" width="120" height="220" alt="">
                    <figcaption>
                        <a href="/">{{$el->Name}}</a>
                        <span>{{$el->IdAuthor}}</span>
                        <span>{{$el->IdPublisher}}, {{$el->Year}} г.</span>
                        <span>{{$el->Price}} руб.</span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
        <div class="team-row">
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
            <figure>
                <img src="../images/ex.png" width="120" height="220" alt="">
                <figcaption>
                    <a href="/">Название</a>
                    <span>Автор</span>
                    <span>Издательство, год</span>
                    <span>Цена</span>
                </figcaption>
            </figure>
        </div>


    </section>
@endsection


