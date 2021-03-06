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
        <h2 class="offers__title">{{ setting('site.slogan') }}</h2>
        <div class="row">
            @foreach($models as $model)
                <div class="col col-lg-3 col-md-4 col-sm-6">
                    <div class="offer">
                        <div class="offer_mark">
                            @switch($model->mark)
                                @case(1)
                                <img src="{{ asset('/img/mark/recomenduim_ua.png') }}"/>
                                @break
                                @case(2)
                                <img src="{{ asset('/img/mark/pp_odobr_predpr.png') }}"/>
                                @break
                                @case(3)
                                <img src="{{ asset('/img/mark/perviie_zaimi_pod_0.png') }}"/>
                                @break
                                @case(4)
                                <img src="{{ asset('/img/mark/pervIe1000.png') }}"/>
                                @break
                                @case(5)
                                <img class="like" src="{{ asset('/img/mark/like_ua.png') }}"/>
                                @break
                            @endswitch
                        </div>

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
        <!-- Subscription Form -->
        <script src="//static-login.sendpulse.com/apps/fc3/build/loader.js" sp-form-id="e234babc40a090b9ecdbce4c68c59bd76f2a0c3809d51bd2a03e753201cf2f6c"></script>
        <!-- /Subscription Form -->

        <?= setting('site.agreement') ?>
    </section>
@endsection
