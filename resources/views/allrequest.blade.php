@extends('layouts.app')

@section('maincss')
    <link rel="stylesheet" href="../css/allrequest.css" type="text/css">
@endsection
@section('information')
    <div id="heading">
        <h1>ЗАКАЗЫ</h1>
    </div>
    <div class="rowlabel">
        <div>
            Список заказов
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
            Итоговая сумма
        </div>
    </div>
    <div class="main">
        <div class="contents">
            <div class="content">
                <div class="megarow">
                    <div class="rows">
                        <div class="data">Дата заказа</div><br/>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                    </div>
                    <div class="price">Итоговая цена</div>
                </div>
                <div class="megarow">
                    <div class="rows">
                        <div class="data">Дата заказа</div><br/>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                        <div class="row">
                            <div class="book">
                                <div>
                                    <b><a href="/" class="name">Название книги</a></b>
                                </div>
                            </div>
                            <div>Цена</div>
                            <div>Количество</div>
                            <div>Сумма</div>
                        </div>
                    </div>
                    <div class="price">Итоговая цена</div>
                </div>

            </div>
        </div>
    </div>
@endsection






