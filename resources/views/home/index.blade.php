@extends('layout.main')

@section('title', 'Page Title')

@section('header')
    <header class="header">
        <div class="container">
            <div class="header__title-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img src="/templates/zaim24/img/logotype.png" alt="" class="img-responsive header__logotype">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h1 class="header__title">СРОЧНЫЕ ЗАЙМЫ НА КАРТУ И ОНЛАЙН КРЕДИТЫ</h1>
                        <h1 class="header__desc">Список с высоким % одобрения при любой истории заемщика!</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="offers">
        <h2 class="offers__title">Предложения Украины</h2>
        <div class="row">
            @foreach($models as $model)
            @endforeach
            @for ($i = 0; $i < 10; $i++)
                <div class="col col-lg-3 col-md-4 col-sm-6">
                    <div class="offer">
                        <a href="http://pix15.link/scripts/click.php?ban_id=h12dq8jz&amp;aff_id=88888888" target="_blank">
                            <div style="background-image:url(//arbitraff.ru/img/offers_logos/366.png)" class="offer__logo"></div>
                        </a>
                        <table class="offer__table">
                            <tbody>
                            <tr>
                                <td class="offer__table-td--left">Сумма</td>
                                <td class="offer__table-td--right">to 15000 грн</td>
                            </tr>
                            <tr>
                                <td class="offer__table-td--left">Ставка</td>
                                <td class="offer__table-td--right">от 0% в день</td>
                            </tr>
                            <tr>
                                <td class="offer__table-td--left">Срок</td>
                                <td class="offer__table-td--right"> от
                                    <span> 62</span>
                                    до
                                    <span> 365</span>
                                    дней
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="offer__hit-wrap">
                            <p class="offer__hit">Только до 31 мая!</p>
                            <p class="offer__hit">Автовыдача 24/7!</p>
                        </div>
                        <div class="offer__button-wrap">
                            <a href="http://pix15.link/scripts/click.php?ban_id=h12dq8jz&amp;aff_id=88888888" target="_blank" class="offer__button">
                                ПОЛУЧИТЬ ДЕНЬГИ
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
