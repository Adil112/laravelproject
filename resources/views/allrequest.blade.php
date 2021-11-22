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
                @foreach($requests as $el)
                    <div class="megarow">
                        <div class="rows">
                            @foreach($el->books_requests as $br)
                            <div class="data">{{$el->Date}}</div><br/>
                            <div class="row">
                                <div class="book">
                                    <div>
                                            <b><a href="/" class="name">{{$br->book->Name}}</a></b>
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
                        </div>
                        <div class="price">{{$el->Price}} руб.</div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
@endsection






