@extends('layout.main')

@section('title', setting('site.title'))

@section('header')
    <header class="header">
        <div class="container">
            <div class="header__title-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img src="{{ Voyager::image(setting('header.header_logo')) }}" alt="" class="img-responsive header__logotype">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h1 class="header__title">{{ setting('header.header_title') }}</h1>
                        <h1 class="header__desc">{{ setting('header.header_description') }}</h1>
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
                <div class="col col-lg-3 col-md-4 col-sm-6">
                    <div class="offer">
                        <a href="{{ $model->link_to_site }}" target="_blank">
                            <div style="background-image:url({{ Voyager::image($model->logo) }})" class="offer__logo"></div>
                        </a>
                        <table class="offer__table">
                            <tbody>
                            @if($model->sum)
                                <tr>
                                    <td class="offer__table-td--left">Сумма</td>
                                    <td class="offer__table-td--right"> {{ $model->sum }} грн</td>
                                </tr>
                            @endif

                            @if($model->rate)
                                <tr>
                                    <td class="offer__table-td--left">Ставка</td>
                                    <td class="offer__table-td--right">от {{ $model->rate }}% в день</td>
                                </tr>
                            @endif

                            @if($model->term_from || $model->term_to)
                                <tr>
                                    <td class="offer__table-td--left">Срок</td>
                                    <td class="offer__table-td--right">
                                        @if($model->term_from)
                                            от
                                            <span> {{ $model->term_from }}</span>
                                        @endif

                                        @if($model->term_to)
                                            до
                                            <span> {{ $model->term_to }}</span>
                                        @endif
                                        дней
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                        @if($model->description)
                            <div class="offer__hit-wrap">
                                @foreach(explode('|', $model->description) as $description)
                                    <p class="offer__hit">{{ $description }}</p>
                                @endforeach
                            </div>
                        @endif
                        
                        <div class="offer__button-wrap">
                            <a href="{{ $model->link }}" target="_blank" class="offer__button">
                                {{ setting('site.btn_label') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="agreement">
        <?= setting('site.agreement') ?>
    </section>
@endsection
