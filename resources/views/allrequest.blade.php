@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/allrequest.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('information')
    <div id="heading">
        <h1>ЗАКАЗЫ</h1>
    </div>
    <div class="order">
        @foreach($requests as $el)
        <div class="top-order container">
            <div class="row">
                <div class="col-10 data">
                    Заказ от {{$el->Date}}
                </div>
                <div class="col-2">
                    {{$el->Price}},
                    @if($el->Status == 1) оплачено
                    @else не оплачено
                    @endif
                </div>
            </div>
            <div>
                <div>
                    Адрес: {{$el->Address}} <br>
                    Телефон: {{$el->Phone}} <br>
                    Способ олпаты: {{$el->pay->Name}} <br>
                </div>
            </div>

        </div>
            <div class="books container">
                @foreach($el->books_requests as $br)
                    <div class="book row">
                        <div class="col-3">
                            {{$br->book->Name}}
                        </div>
                        <div class="col-3">
                            {{$br->book->author->Surname}} {{$br->book->author->Name}}
                        </div>
                        <div class="col-3">
                            Кол-во: {{$br->Quantity}}
                        </div>
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>







@endsection






