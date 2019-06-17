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
        <style >.sp-force-hide { display: none;}.sp-form[sp-id="125158"] { display: block; background: rgba(153, 228, 247, 0.99); padding: 5px; width: 370px; max-width: 100%; border-radius: 30px; -moz-border-radius: 30px; -webkit-border-radius: 30px; border-color: rgba(0, 0, 0, 1); border-style: solid; border-width: 2px; font-family: Tahoma, Geneva, sans-serif; background-repeat: no-repeat; background-position: center; background-size: auto;}.sp-form[sp-id="125158"] input[type="checkbox"] { display: inline-block; opacity: 1; visibility: visible;}.sp-form[sp-id="125158"] .sp-form-fields-wrapper { margin: 0 auto; width: 360px;}.sp-form[sp-id="125158"] .sp-form-control { background: rgba(250, 250, 250, 1); border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 18px; -moz-border-radius: 18px; -webkit-border-radius: 18px; height: 35px; width: 100%;}.sp-form[sp-id="125158"] .sp-field label { color: #444444; font-size: 13px; font-style: normal; font-weight: bold;}.sp-form[sp-id="125158"] .sp-button { border-radius: 13px; -moz-border-radius: 13px; -webkit-border-radius: 13px; background-color: #eb4d4d; color: #ffffff; width: 100%; font-weight: 700; font-style: normal; font-family: Arial, "Helvetica Neue", sans-serif; box-shadow: inset 0 -2px 0 0 #e11919; -moz-box-shadow: inset 0 -2px 0 0 #e11919; -webkit-box-shadow: inset 0 -2px 0 0 #e11919;}.sp-form[sp-id="125158"] .sp-button-container { text-align: left; width: auto;}.sp-form[sp-id="125158"] .sp-ca4997f8-58fc-471a-9c43-987f073e4629-container { text-align: center;}</style><div class="sp-form-outer sp-force-hide"><div id="sp-form-125158" sp-id="125158" sp-hash="e234babc40a090b9ecdbce4c68c59bd76f2a0c3809d51bd2a03e753201cf2f6c" sp-lang="ru" class="sp-form sp-form-regular sp-form-embed" sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3A%22%D0%A4%D0%BE%D1%80%D0%BC%D0%B0_%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B8_%D0%9D%D0%BE%D0%B2%D1%8B%D0%B9_%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_1%22%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3A%22%D0%A4%D0%BE%D1%80%D0%BC%D0%B0_%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B8_%D0%9D%D0%BE%D0%B2%D1%8B%D0%B9_%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_1%22%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%7D"><div class="sp-form-fields-wrapper"><div class="sp-message"><div></div></div><form novalidate="" class="sp-element-container ui-sortable ui-droppable "><div class="sp-field sp-field-full-width" sp-id="sp-bfb8a15a-0a36-4f5f-890e-909bbbc2b9de"><div style="font-family: inherit; line-height: 1.2;"><p style="text-align: center;"><span style="color: #333333; font-size: 18px;"><strong>Раз в неделю получи Топ 5 выгодных Займов + советы как взять, погасить, перекреитоватся выгодно!</strong></span></p></div></div><div class="sp-field " sp-id="sp-37b96660-6ab8-4ae1-a983-56a33d569692"><label class="sp-control-label"><span >Имя</span><strong >*</strong></label><input type="text" sp-type="name" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="Фамилия, имя" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-114d0148-e881-4e04-8df4-21aae1d17742"><label class="sp-control-label"><span >Телефон</span><strong >*</strong></label><input type="text" sp-type="phone" name="sform[phone]" class="sp-form-control " placeholder="1234567890" sp-tips="%7B%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%20%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B0%22%2C%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-04561998-4387-4b6d-b2bc-b19846b34be6"><label class="sp-control-label"><span >Email</span><strong >*</strong></label><input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"></div><div class="sp-field full-width sp-ca4997f8-58fc-471a-9c43-987f073e4629-container " sp-id="sp-ca4997f8-58fc-471a-9c43-987f073e4629"><img class="sp-image " src="//login.sendpulse.com/files/emailservice/userfiles/c15b7180db431aa65356fa9afbd71e727159668/bf6.gif"></div><div class="sp-field sp-button-container " sp-id="sp-eb62094b-b539-4876-969d-014758f2d2b2"><button id="sp-eb62094b-b539-4876-969d-014758f2d2b2" class="sp-button">Получать новости </button></div></form><div class="sp-link-wrapper sp-brandname__left"><a class="sp-link " target="_blank" href="https://sendpulse.com/ru/forms-powered-by-sendpulse?from=7159668"><span class="sp-link-img">&nbsp;</span><span translate="FORM.PROVIDED_BY">Предоставлено SendPulse</span></a></div></div></div></div><script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1558693637210"></script>
        <!-- /Subscription Form -->

        <?= setting('site.agreement') ?>
    </section>
@endsection
