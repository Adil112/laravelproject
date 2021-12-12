@extends('layouts.application')

@section('maincss')
    <link rel="stylesheet" href="../css/apphome.css" type="text/css">
@endsection
@section('information')
    <div id="heading">
        <h1>ГЛАВНАЯ</h1>
    </div>
    <section>
        <blockquote>
            <p>
                “Читая в первый раз хорошую книгу, мы испытываем то же чувство,
                как при приобретении нового друга. Вновь прочитать уже читанную книгу — значит
                вновь увидеть старого друга.”
            </p>
            <cite>Вольтер</cite>
        </blockquote>
        <p>Whitesquare — одна из крупнейших росийских издательств по продаже книжных изделий для любых людей — взрослые, дети, ученые, бизнесмены и так далее. Своей целью оно поставило «сохранение русских культурных традиций и передачу их нашим потомкам» и за многие годы работы смогло снискать любовь миллионов читателей и уважение партнеров</p>
        <p>Главными темами для издательства всегда являлись русская и мировая культура, искусство, история и наука. В книгах «Whitesquare» всегда много цветных иллюстраций, репродукций произведений живописи, которые помогают читателю погрузиться в особый художественный мир.</p>
        <p>Издательство «Whitesquare» было основано в 1996 году и уже через 3 года вошло в число 20 крупнейших издательств России.</p>
        <figure>
            <img src="../images/pub1.png" width="300" height="165" alt="">
        </figure>
        <figure>
            <img src="../images/pub2.png" width="300" height="165" alt="">
        </figure>
        <figure>
            <img src="../images/pub3.png" width="300" height="165" alt="">
        </figure>
        <h2>НАША КОМАНДА</h2>
        <div class="team-row">
            <figure>
                <img src="../images/per1.png" width="180" height="120" alt="">
                <figcaption>Бордеев Алексей<span>Глава издательства</span></figcaption>
            </figure>
            <figure>
                <img src="../images/per2.png" width="180" height="120" alt="">
                <figcaption>Симфина Татьяна<span>Тех. директор</span></figcaption>
            </figure>
            <figure>
                <img src="../images/per3.png" width="180" height="120" alt="">
                <figcaption>Горелый Анатолий<span>Главный букинист</span></figcaption>
            </figure>
            <figure>
                <img src="../images/per5.png" width="180" height="120" alt="">
                <figcaption>Корнева София<span>Креативный начальник</span></figcaption>
            </figure>
        </div>
    </section>
@endsection





