<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="referrer" content="no-referrer">

    <script>
        function sendEvent(action, category, label) {
            return true;
        }
    </script>
    <script>
        function report_click() {
            var oid = this.getAttribute('data-oid');
            return true;
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link rel='dns-prefetch' href='//go.akrediti.ru'/>
    <title>Взять займ онлайн беспроцентный. Взять займ на карту. Взять займ без отказа.</title>
    <meta name="keywords" content="Взять займ. Получить займ онлайн. Взять займ на карту. Взять займ без отказа.">
    <meta name="description" content="Взять в займ онлайн. Взять займ на карту быстро. Взять займ без отказа.">
    <link rel="icon" href="/bank2/assets/rz/favicon.png" type="image/png">
    <link rel="stylesheet" href="/bank2/css/style.css">
    <link rel="manifest" href="/manifest.json">

    @if(setting('app.enable'))
        <meta name="apple-itunes-app" content="app-id=54400766423232324">
        <meta name="google-play-app" content="app-id=com.finapps.toploansatstakeinukraine">

        <link rel="apple-touch-icon" href="{{ asset('smartbanner/smart-app-banner.png') }}">
        <link rel="android-touch-icon" href="{{ asset('smartbanner/smart-app-banner.png') }}"/>

        <link rel="stylesheet" href="{{ asset('smartbanner/smart-app-banner2.css') }}">
    @endif

    <?= setting('credit.after_header') ?>
</head>
<body>
<h1 class="vishi">Взять займ</h1>
<h2 class="vishi">Взять займ онлайн.</h2>
<h3 class="vishi">Взять займ на карту.</h3>
<h4 class="vishi">Взять займ без отказа.</h4>
<p class="vishi">Взять займ. Взять займ онлайн. Взять займ на карту. Взять займ без отказа.</p>
<div class="vishi">
    <p>Минимальный и максимальный период погашения долга (minimum and maximum period for repayment)</p>
    <p>Минимальный срок погашения долга составляет 61 день. Максимальный срок - 365 дней.</p>
    <p>Максимальная годовая процентная ставка, включающая ссудный процент, а также все остальные комиссии и расходы за
        год (maximum Annual Percentage Rate (APR), including interest rate plus fees and other costs for a year)
    </p>
    <p>Годовой процент за пользование займом - min 1%, max 31%.</p>
    <p>Пример расчета стоимости типичного займа со всеми применимыми комиссиями (representative example of the total
        cost of the loan, including all applicable fees)
    </p>
    <p>Если вы взяли займ на сумму 1000 гривен на 90 дней с процентной ставкой 0,01% в день, то плата за пользование
        средствами составит 0,01% в день, т.е. 0,1 грн в день. Получается вы возвращаете сумму процентов равную 9 грн,
        т.е. 0.1 грн * 90 дней. А также сумму займа равную 1 000 грн. Таким образом, общая сумма возврата складывается
        из суммы займа 1 000 грн и суммы начисленных процентов за 90 дн. 9 грн и равна 1090 грн.
    </p>
</div>
<div class="notificate-wrapper" style="z-index:99999999;">
    <div class="notice-block action-3 not-opened" style="display: none;" id="hidden_content">
        <div class="notice-close" onclick="this.parentNode.style.display = 'none';"></div>
        <a href="http://bit.ly/2KnTUsL" target="_blank" class="offer_link" data-oid="10">
            <div class="notice-image">
                <img src="/image/CreditPLUS2019.png" alt="">
            </div>
            <div class="notice-data">
                <div class="notice-title">Займ за 9 минут!</div>
                <div class="notice-text">до 3 000 грн онлайн
                    <br>
                    одобрение автоматически
                    <br>
                    <u>Получить займ</u>
                </div>
            </div>
        </a>
    </div>
</div>
<section class="wrapper">
    <center>
        <p class="topp">Получите лучшие условия займа и увеличте % одобрения отправляя 4-5 заявок!</p>
    </center>
    <div class="content">
        <h2>
            <!-- 				<span class="inner-text">Взять займ</span> -->
            <span class="inner-text">Займы от 0% на карту</span>
        </h2>
        <div id="spisok1" class="offers">
            @foreach($models as $model)
                <a class="offer_wrap offer_link" target="_blank" href="{{ $model->link_to_site }}" data-oid="10">
                    <div class="link_offers">
                        <div id="cr_block_new">
                            <div class="offers__logo">
                                <img src="{{ Voyager::image($model->logo) }}" alt="Быстрая выдача" class="oimg"/>
                            </div>
                            <div class="parallelogram__wrapper">
                                <div class="parallelogram">
                                    <span>Быстрая выдача</span>
                                </div>
                            </div>
                            <div id="cr_cont">
                                <div id="cr_stb">
                                    @if($model->sum)
                                        <div id="cr_p_new2">до
                                            <strong>{{ $model->sum }}</strong>
                                            грн.
                                        </div>
                                    @endif

                                    @if($model->rate)
                                        <div id="cr_p_new">
                                            <strong>{{ $model->rate }}% на первый</strong>
                                        </div>
                                    @endif

                                    @if($model->term_from || $model->term_to)
                                        <div id="cr_p_new2">от
                                            <strong>{{ $model->term_from }}</strong>
                                            лет
                                        </div>
                                    @endif
                                    <div id="cr_p_new">
                                        <div class="counter"></div>
                                    </div>
                                    <div id="cr_p5">Получить займ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <script>
            var classname = document.getElementsByClassName("offer_link");
            let touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
            for (var i = 0; i < classname.length; i++) {
                classname[i].addEventListener(touchEvent, report_click);
            }
        </script>
        <h3>
            <span class="icon icon-list"></span>
            Полезная информация
        </h3>
        <div class="textBlock">
            <div class="textBlock__left">
                <h4 class="mobile-hidden">Требования к заёмщикам:</h4>
                <ul class="mobile-hidden">
                    <li>Гражданство Украины</li>
                    <li>Возраст от 18 лет</li>
                    <li>Любая кредитная история</li>
                </ul>
                <h4 class="mobile-hidden">Условия получения:</h4>
                <ul class="mobile-hidden">
                    <li>Минимальный срок погашения долга (minimum and maximum period for repayment) составляет 61 день.
                        Максимальный срок - 365 дней;
                    </li>
                    <li>Максимальная годовая процентная ставка, включающая ссудный процент, а также все остальные
                        комиссии и расходы за год (maximum Annual Percentage Rate (APR), including interest rate plus
                        fees and other costs for a year) составляет 31%, а минимальная 3%. Годовой процент за
                        пользование займом - min 1%, max 31%.
                    </li>
                    <li>В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не
                        более 10% от суммы займа;
                    </li>
                    <li>В случае длительной задержки выплаты информация будет передана в БКИ.</li>
                    <li>Продление займа возможно при своевременном информировании кредитора (до наступления даты
                        возврата займа) и уплаты процентов за первичный срок займа. Дополнительных комиссий за продление
                        займа не предусмотрено.
                    </li>
                </ul>
                <h4>Последствия невыплаты займа:</h4>
                <p>В случае невозвращения в условленный срок суммы займа или суммы процентов за пользование заёмными
                    средствами кредитор
                    вынуждено начислит штраф за просрочку платежа. Большинство кредиторов идут на уступки и дают 3
                    дополнительных рабочих
                    дня для оплаты. Они предусмотрены на случай, к примеру, если банковский перевод занял больше
                    времени, чем обычно. Однако,
                    в случае неполучения от Вас какой-либо реакции в течение продолжительного времени, будет начислен
                    штраф за просрочку срока
                    погашения размером в среднем 0,10% от первоначальной суммы для займов. При несоблюдении Вами условий
                    по погашению займов, данные о Вас могут быть переданы
                    в реестр должников или БКИ, что негативно может сказаться на Вашей кредитной истории и рейтинге
                    кредитоспособности. Задолженность
                    может быть передана коллекторскому агентству для взыскания долга. При допуске просрочки продление
                    займа невозможно.
                </p>
                <p class="mobile-hidden">О всех приближающихся сроках платежа кредитор своевременно информирует Вас по
                    СМС или электронной почте. Рекомендуем Вам
                    вносить платеж в день получения данных напоминаний. Погашая задолженность в срок, Вы формируете
                    хорошую кредитную историю,
                    что повышает Ваш рейтинг кредитоспособности и шансы в дальнейшем получить займ на более выгодных
                    условиях.
                </p>
                <p class="mobile-hidden">Предложение не является офертой. Конечные условия уточняйте при прямом общении
                    с кредиторами.
                </p>
            </div>
            <div class="textBlock__right">
                <h4 class="mobile-hidden">Информация о полной стоимости займа и пример расчета (representative example
                    of the total cost of the loan, including all applicable fees):
                </h4>
                <p class="mobile-hidden"> ПРИМЕР: Вы взяли займ на сумму 1000 гривен на 90 дней с процентной ставкой
                    0,01% в день, то плата за пользование средствами составит 0,01% в день, т.е. 0,1 грн в день.
                    Получается вы возвращаете сумму процентов равную 9 грн, т.е. 0.1 грн * 90 дней. А также сумму займа
                    равную 1 000 грн. Таким образом, общая сумма возврата складывается из суммы займа 1 000 грн и суммы
                    начисленных процентов за 90 дн. 9 грн и равна 1090 грн.
                </p>
                <p>Минимальный и максимальный период погашения долга составляет от 65 дней, до 365 дней.</p>
                <p>Максимальная годовая процентная ставка, включающая ссудный процент, а также все остальные комиссии и
                    расходы за год, или аналогичная ставка, рассчитанная соответственно местному законодательству
                    составляет 31% годовых.
                </p>
                <p>Взыскание долгов осуществляется посредством телефонных звонков, уведомлений по SMS и электронной
                    почте, как Заемщика, так
                    и контактного лица.
                </p>
                <p>В случае просрочки по выплатам, со следующего дня после истечения срока займа, Вам будет ежедневно
                    начисляться пеня в размере
                    0,05 - 1% в день от суммы займа. Также будет продолжаться ежедневное начисление процентов за
                    пользование займом по договору
                    и возможно начисление фиксированной комиссии.
                </p>
            </div>

        </div>

    </div>

</section>
<div class="footer__wrap">
    <footer class="footer">
        <div class="content">
            <div class="footer__text">Ресурс не является финансовым учреждением, банком или кредитором, и не несёт
                ответственности за любые заключенные договоры или условия. Все материалы, размещенные на сайте имееют
                информационный характер. Условия выдачи займов (кредитов)
                уточняйте на сайте МФО или банка.
            </div>
            <div class="copyright">&copy; cjiworld.com.</div>
        </div>
    </footer>
</div>

@if(setting('app.enable'))
    <script src="{{ asset('smartbanner/smart-app-banner.js') }}"></script>
    <script>
        new SmartBanner({
            daysHidden: 15,
            daysReminder: 90,
            appStoreLanguage: 'us',
            title: '{{ setting('app.banner_title') }}',
            author: 'Cijworld',
            button: 'Установить',
            store: {
                ios: '{{ setting('app.app_store_title') }}',
                android: '{{ setting('app.app_google_title') }}',
            },
            price: {
                ios: 'FREE',
                android: 'FREE',
                windows: 'FREE'
            },
            icon: '/smartbanner/smart-app-banner.png'
        });
    </script>
@endif

<script src="//static-login.sendpulse.com/apps/fc3/build/loader.js" sp-form-id="e234babc40a090b9ecdbce4c68c59bd76f2a0c3809d51bd2a03e753201cf2f6c"></script>
<script>!function (e, t, d, s, a, n, c) {
        e[a] = {}, e[a].date = (new Date).getTime(), n = t.createElement(d), c = t.getElementsByTagName(d)[0], n.type = "text/javascript", n.async = !0, n.src = s, c.parentNode.insertBefore(n, c)
    }(window, document, "script", "https://creditcijworldcom.push.world/https.embed.js", "pw"), pw.websiteId = "25b6db628b8da47c8c607b67c0d886812318b29b57187f556b8d201976370385";</script>
<script>
    window.onload = function () {
        function slideDown(content) {
            content.style.overflow = 'hidden';
            content.style.display = 'block';
            var totalHeight = content.clientHeight;
            content.style.height = 0;
            var i = 0;
            var loop = setInterval(function () {
                if (content.clientHeight == totalHeight) {
                    clearInterval(loop);
                }
                content.style.height = i + 'px';
                i += 1;
            }, 10);
        }

        var btn = document.getElementById('button');
        var run = 0;
        window.addEventListener('scroll', function () {
            if (run == 0) {
                run = 1;
                var content = document.getElementById('hidden_content');
                var style = window.getComputedStyle(content);
                slideDown(content);
            }
        })
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>!function (e) {
        e(["jquery"], function (e) {
            return function () {
                function t(e, t, n) {
                    return g({
                        type: O.error,
                        iconClass: m().iconClasses.error,
                        message: e,
                        optionsOverride: n,
                        title: t
                    })
                }

                function n(t, n) {
                    return t || (t = m()), v = e("#" + t.containerId), v.length ? v : (n && (v = d(t)), v)
                }

                function o(e, t, n) {
                    return g({type: O.info, iconClass: m().iconClasses.info, message: e, optionsOverride: n, title: t})
                }

                function s(e) {
                    C = e
                }

                function i(e, t, n) {
                    return g({
                        type: O.success,
                        iconClass: m().iconClasses.success,
                        message: e,
                        optionsOverride: n,
                        title: t
                    })
                }

                function a(e, t, n) {
                    return g({
                        type: O.warning,
                        iconClass: m().iconClasses.warning,
                        message: e,
                        optionsOverride: n,
                        title: t
                    })
                }

                function r(e, t) {
                    var o = m();
                    v || n(o), u(e, o, t) || l(o)
                }

                function c(t) {
                    var o = m();
                    return v || n(o), t && 0 === e(":focus", t).length ? void h(t) : void (v.children().length && v.remove())
                }

                function l(t) {
                    for (var n = v.children(), o = n.length - 1; o >= 0; o--) u(e(n[o]), t)
                }

                function u(t, n, o) {
                    var s = !(!o || !o.force) && o.force;
                    return !(!t || !s && 0 !== e(":focus", t).length) && (t[n.hideMethod]({
                        duration: n.hideDuration,
                        easing: n.hideEasing,
                        complete: function () {
                            h(t)
                        }
                    }), !0)
                }

                function d(t) {
                    return v = e("<div/>").attr("id", t.containerId).addClass(t.positionClass), v.appendTo(e(t.target)), v
                }

                function p() {
                    return {
                        tapToDismiss: !0,
                        toastClass: "toast",
                        containerId: "toast-container",
                        debug: !1,
                        showMethod: "fadeIn",
                        showDuration: 300,
                        showEasing: "swing",
                        onShown: void 0,
                        hideMethod: "fadeOut",
                        hideDuration: 1e3,
                        hideEasing: "swing",
                        onHidden: void 0,
                        closeMethod: !1,
                        closeDuration: !1,
                        closeEasing: !1,
                        closeOnHover: !0,
                        extendedTimeOut: 1e3,
                        iconClasses: {
                            error: "toast-error",
                            info: "toast-info",
                            success: "toast-success",
                            warning: "toast-warning"
                        },
                        iconClass: "toast-info",
                        positionClass: "toast-top-right",
                        timeOut: 5e3,
                        titleClass: "toast-title",
                        messageClass: "toast-message",
                        escapeHtml: !1,
                        target: "body",
                        closeHtml: '<button type="button">&times;</button>',
                        closeClass: "toast-close-button",
                        newestOnTop: !0,
                        preventDuplicates: !1,
                        progressBar: !1,
                        progressClass: "toast-progress",
                        rtl: !1
                    }
                }

                function f(e) {
                    C && C(e)
                }

                function g(t) {
                    function o(e) {
                        return null == e && (e = ""), e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                    }

                    function s() {
                        c(), u(), d(), p(), g(), C(), l(), i()
                    }

                    function i() {
                        var e = "";
                        switch (t.iconClass) {
                            case"toast-success":
                            case"toast-info":
                                e = "polite";
                                break;
                            default:
                                e = "assertive"
                        }
                        I.attr("aria-live", e)
                    }

                    function a() {
                        E.closeOnHover && I.hover(H, D), !E.onclick && E.tapToDismiss && I.click(b), E.closeButton && j && j.click(function (e) {
                            e.stopPropagation ? e.stopPropagation() : void 0 !== e.cancelBubble && e.cancelBubble !== !0 && (e.cancelBubble = !0), E.onCloseClick && E.onCloseClick(e), b(!0)
                        }), E.onclick && I.click(function (e) {
                            E.onclick(e), b()
                        })
                    }

                    function r() {
                        I.hide(), I[E.showMethod]({
                            duration: E.showDuration,
                            easing: E.showEasing,
                            complete: E.onShown
                        }), E.timeOut > 0 && (k = setTimeout(b, E.timeOut), F.maxHideTime = parseFloat(E.timeOut), F.hideEta = (new Date).getTime() + F.maxHideTime, E.progressBar && (F.intervalId = setInterval(x, 10)))
                    }

                    function c() {
                        t.iconClass && I.addClass(E.toastClass).addClass(y)
                    }

                    function l() {
                        E.newestOnTop ? v.prepend(I) : v.append(I)
                    }

                    function u() {
                        if (t.title) {
                            var e = t.title;
                            E.escapeHtml && (e = o(t.title)), M.append(e).addClass(E.titleClass), I.append(M)
                        }
                    }

                    function d() {
                        if (t.message) {
                            var e = t.message;
                            E.escapeHtml && (e = o(t.message)), B.append(e).addClass(E.messageClass), I.append(B)
                        }
                    }

                    function p() {
                        E.closeButton && (j.addClass(E.closeClass).attr("role", "button"), I.prepend(j))
                    }

                    function g() {
                        E.progressBar && (q.addClass(E.progressClass), I.prepend(q))
                    }

                    function C() {
                        E.rtl && I.addClass("rtl")
                    }

                    function O(e, t) {
                        if (e.preventDuplicates) {
                            if (t.message === w) return !0;
                            w = t.message
                        }
                        return !1
                    }

                    function b(t) {
                        var n = t && E.closeMethod !== !1 ? E.closeMethod : E.hideMethod,
                            o = t && E.closeDuration !== !1 ? E.closeDuration : E.hideDuration,
                            s = t && E.closeEasing !== !1 ? E.closeEasing : E.hideEasing;
                        if (!e(":focus", I).length || t) return clearTimeout(F.intervalId), I[n]({
                            duration: o,
                            easing: s,
                            complete: function () {
                                h(I), clearTimeout(k), E.onHidden && "hidden" !== P.state && E.onHidden(), P.state = "hidden", P.endTime = new Date, f(P)
                            }
                        })
                    }

                    function D() {
                        (E.timeOut > 0 || E.extendedTimeOut > 0) && (k = setTimeout(b, E.extendedTimeOut), F.maxHideTime = parseFloat(E.extendedTimeOut), F.hideEta = (new Date).getTime() + F.maxHideTime)
                    }

                    function H() {
                        clearTimeout(k), F.hideEta = 0, I.stop(!0, !0)[E.showMethod]({
                            duration: E.showDuration,
                            easing: E.showEasing
                        })
                    }

                    function x() {
                        var e = (F.hideEta - (new Date).getTime()) / F.maxHideTime * 100;
                        q.width(e + "%")
                    }

                    var E = m(), y = t.iconClass || E.iconClass;
                    if ("undefined" != typeof t.optionsOverride && (E = e.extend(E, t.optionsOverride), y = t.optionsOverride.iconClass || y), !O(E, t)) {
                        T++, v = n(E, !0);
                        var k = null, I = e("<div/>"), M = e("<div/>"), B = e("<div/>"), q = e("<div/>"),
                            j = e(E.closeHtml), F = {intervalId: null, hideEta: null, maxHideTime: null},
                            P = {toastId: T, state: "visible", startTime: new Date, options: E, map: t};
                        return s(), r(), a(), f(P), E.debug && console && console.log(P), I
                    }
                }

                function m() {
                    return e.extend({}, p(), b.options)
                }

                function h(e) {
                    v || (v = n()), e.is(":visible") || (e.remove(), e = null, 0 === v.children().length && (v.remove(), w = void 0))
                }

                var v, C, w, T = 0, O = {error: "error", info: "info", success: "success", warning: "warning"}, b = {
                    clear: r,
                    remove: c,
                    error: t,
                    getContainer: n,
                    info: o,
                    options: {},
                    subscribe: s,
                    success: i,
                    version: "2.1.3",
                    warning: a
                };
                return b
            }()
        })
    }("function" == typeof define && define.amd ? define : function (e, t) {
        "undefined" != typeof module && module.exports ? module.exports = t(require("jquery")) : window.toastr = t(window.jQuery)
    });
</script>
<script>
    var timeLead = 5e3,
        names = [["Анастасия", "София", "Ангелина", "Алина", "Диана", "Наталья", "Мария", "Юлия", "Виктория", "Елизавета", "Ульяна", "Вероника", "Александра"], ["Егор", "Виктор", "Александр", "Даниил", "Денис", "Данил", "Андрей", "Никита", "Богдaн", "Илья", "Ярослав", "Дмитрий", "Владимир", "Максим", "Никита"]],
        offerstakesername = new Array("А", "Б", "В", "Г", "И", "Д", "П", "О", "Т", "Ж", "Л", "З", "Х", "Е", "У", "Р", "Ф", "С", "Н", "М", "Ш", "К", "Ч"),
        offerstakesum = new Array("15000", "14000", "13000", "12000", "11000", "10000", "9000", "8000", "7000", "6000", "5000", "4000", "3000", "2000", "1000"),
        offerstaketype = new Array("на банковскую карту", "на банковский счет", "на счет", "на Приват 24", "наличными", "на банковскую карту"),
        offerstakecity = new Array("Киев", "Львов", "Одесса", "Харьков", "Винница", "Черновцы", "Запорожье", "Ивано-Франковск", "Луцк", "Днепр", "Херсон", "Хмельницкий", "Тернополь", "Николаев", "Ужгород", "Чернигов", "Сумы", "Житомир", "Полтава", "Ровно", "Черкассы", "Кривой Рог", "Трускавец", "Борисполь", "Умань", "Измаил", "Коломыя", "Буча", "Нежин", "Калуш", "Дрогобыч");
    toastr.options = {
        "closeButton": !0,
        "debug": !1,
        "newestOnTop": !1,
        "progressBar": !0,
        "positionClass": "toast-top-right",
        "preventDuplicates": !0,
        "showDuration": "300",
        "hideDuration": "300",
        "timeOut": "4000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.options.onclick = function () {
    };

    function stickalert() {
        var rand = Math.floor(Math.random() * 2) + 1;
        if (rand == 1) offerstakename = names[0]; else offerstakename = names[1];
        var e = Math.floor(Math.random() * offerstakename.length);
        var t = Math.floor(Math.random() * offerstakesername.length);
        if (rand == 1) var a = "только что получила"; else var a = "только что получил";
        var o = Math.floor(Math.random() * offerstakesum.length);
        offerstakesum[o] = 100 * Math.round((1 * offerstakesum[o] + Math.floor(1e3 * Math.random())) / 100);
        var r = Math.floor(Math.random() * offerstaketype.length),
            n = Math.floor(Math.random() * offerstakecity.length),
            s = offerstakename[e] + " " + offerstakesername[t] + ". (" + offerstakecity[n] + "), " + a + " займ " + offerstakesum[o] + " грн " + offerstaketype[r];
        toastr.success(s)
    }

    function countLead(e) {
        var t = 5e3, a = 55e3;
        if (1 == e) var a = 8e3;
        timeLead = Math.round(t - .5 + Math.random() * (a - t + 1)), console.log(timeLead);
        stickalert();
        setTimeout("countLead()", timeLead)
    }

    setTimeout("countLead(1)", timeLead)
</script>


<script>

    function createCounter(range) {
        var randomNumber;

        function getRandomNumber(range) {
            var randomNumber = range[0] + Math.random() * (range[1] + 1 - range[0]);
            return Math.floor(randomNumber);
        }

        randomNumber = getRandomNumber(range);

        return function сallMeAgain(nums) {
            var expressions = ['заявка', 'заявки', 'заявок'];
            randomNumber += nums || 1;
            var count = randomNumber % 100;
            if (count >= 5 && count <= 20) {
                finalWord = expressions['2'];
            } else {
                count = count % 10;
                if (count == 1) {
                    finalWord = expressions['0'];
                } else if (count >= 2 && count <= 4) {
                    finalWord = expressions['1'];
                } else {
                    finalWord = expressions['2'];
                }
            }

            this.innerHTML = 'Одобрено <strong>' + randomNumber + '</strong> ' + finalWord;
            var nextValue = getRandomNumber([2, 7]);
            setTimeout(сallMeAgain.bind(this, nextValue), getRandomNumber([2000, 7000]));
        }
    }

    function getAllCounters() {
        var counters = document.querySelectorAll('.counter');
        counters.forEach(function (counterTemplate) {
            var counter = createCounter([300, 500]);
            counter.bind(counterTemplate)();
        });
    }

    getAllCounters();
</script>
<script>
    !function (a) {
        "use strict";

        function b(c) {
            if (!(this instanceof b)) return new b(c);
            c = c || {};
            var d = c.context || "body";
            if ("string" == typeof d && (d = m.querySelector(d)), !d) throw new Error("Unable to find context " + d);
            this._context = d, this.minHeight = c.minHeight || 0, this._marks = {}, this._tracked = {}, this._config = {
                percentages: {
                    each: {},
                    every: {}
                }, pixels: {each: {}, every: {}}, elements: {each: {}, every: {}}
            };
            var f = k(this._checkDepth.bind(this), 500), g = this._update.bind(this), h = k(g, 500);
            a.addEventListener("scroll", f, !0), a.addEventListener("resize", h), this._artifacts = {
                timer: e(g),
                resize: h,
                scroll: f
            }
        }

        function c(a) {
            return a.handlers.map(function (b) {
                return b.bind(this, {data: {depth: a.depth, label: a.label}})
            })
        }

        function d(a) {
            var b, c = Math.floor(a.numerator / a.n);
            for (b = 1; b <= c; b++) a.callback(b * a.n)
        }

        function e(a) {
            var b = f();
            return setInterval(function () {
                f() !== b && (a(), b = f())
            }, 500)
        }

        function f() {
            var a = m.body, b = m.documentElement;
            return Math.max(a.scrollHeight, a.offsetHeight, b.clientHeight, b.scrollHeight, b.offsetHeight)
        }

        function g(a) {
            var b = a.offsetHeight, c = h(), d = a.getBoundingClientRect();
            return Math.max(0, d.top > 0 ? Math.min(b, c - d.top) : d.bottom < c ? d.bottom : c)
        }

        function h() {
            return ("CSS1Compat" === m.compatMode ? m.documentElement : m.body).clientHeight
        }

        function i(b) {
            return b.getBoundingClientRect().top - (b.scrollHeight - b.clientHeight) / 2 + (void 0 !== a.pageYOffset ? a.pageYOffset : (m.documentElement || m.body.parentNode || m.body).scrollTop)
        }

        function j() {
        }

        function k(a, b) {
            var c, d, e, f = null, g = 0, h = function () {
                g = new Date, f = null, e = a.apply(c, d)
            };
            return function () {
                var i = new Date;
                g || (g = i);
                var j = b - (i - g);
                return c = this, d = arguments, j <= 0 ? (clearTimeout(f), f = null, g = i, e = a.apply(c, d)) : f || (f = setTimeout(h, j)), e
            }
        }

        function l() {
            var c, d = {};
            for (c in b) d[c] = j;
            a.ScrollTracker = d
        }

        if (a.navigator.userAgent.match(/MSIE [678]/gi)) return l();
        var m = a.document;
        b.prototype.destroy = function () {
            clearInterval(this._artifacts._timer), a.removeEventListener("resize", this._artifacts.resize), a.removeEventListener("scroll", this._artifacts.scroll, !0)
        }, b.prototype.on = function (a, b) {
            var c = this._config;
            ["percentages", "pixels", "elements"].forEach(function (d) {
                a[d] && ["each", "every"].forEach(function (e) {
                    a[d][e] && a[d][e].forEach(function (a) {
                        c[d][e][a] = c[d][e][a] || [], c[d][e][a].push(b)
                    })
                })
            }), this._update()
        }, b.prototype._update = function () {
            this._calculateMarks(), this._checkDepth()
        }, b.prototype._calculateMarks = function () {
            function a(a, b) {
                return function (b, c) {
                    var d = b.getBoundingClientRect().top - m._context.getBoundingClientRect().top;
                    l({label: a + "[" + c + "]", depth: d, handlers: j.elements.every[a]})
                }
            }

            function b(a) {
                return function (a) {
                    var b = Math.floor(a * k / 100);
                    l({label: String(a) + "%", depth: b, handlers: j.percentages.every[h]})
                }
            }

            function c(a) {
                return function (b) {
                    var c = b;
                    l({label: String(c) + "px", depth: c, handlers: a})
                }
            }

            delete this._marks, this._fromTop = i(this._context), this._marks = {};
            var e, f, g, h, j = this._config, k = this._contextHeight(), l = this._addMark.bind(this), m = this;
            if (!(k < this.minHeight)) {
                for (h in j.percentages.every) d({n: Number(h), numerator: 100, callback: b(j.percentages.every[h])});
                for (h in j.pixels.every) d({n: Number(h), numerator: k, callback: c(j.pixels.every[h])});
                for (h in j.percentages.each) g = Math.floor(k * Number(h) / 100), l({
                    label: h + "%",
                    depth: g,
                    handlers: j.percentages.each[h]
                });
                for (h in j.pixels.each) g = Number(h), l({label: h + "px", depth: g, handlers: j.pixels.each[h]});
                for (h in j.elements.every) e = [].slice.call(this._context.querySelectorAll(h)), e.length && e.forEach(a(h, j.elements.every[h]));
                for (h in j.elements.each) (f = this._context.querySelector(h)) && (g = f.getBoundingClientRect().top - m._context.getBoundingClientRect().top, l({
                    label: h,
                    depth: g,
                    handlers: j.elements.each[h]
                }))
            }
        }, b.prototype._checkDepth = function () {
            var a, b = this._marks, c = this._currentDepth();
            for (a in b) c >= a && !this._tracked[a] && (b[a].forEach(function (a) {
                a()
            }), this._tracked[a] = !0)
        }, b.prototype.reset = function () {
            this._tracked = {}, this._marks = {}, this._update()
        }, b.prototype._contextHeight = function () {
            return this._context !== m.body ? this._context.scrollHeight - 5 : this._context.clientHeight - 5
        }, b.prototype._currentDepth = function () {
            var b, c = g(this._context);
            return this._context.scrollTop ? b = this._context.scrollTop + c : (this._context.scrollTop = 1, this._context.scrollTop ? (this._context.scrollTop = 0, b = this._context.scrollTop + c) : b = (a.pageYOffset || m.documentElement.scrollTop || m.body.scrollTop || 0) - this._fromTop), c ? b + c : b >= this._fromTop ? b : -1
        }, b.prototype._addMark = function (a) {
            var b = a.depth;
            this._marks[b] = (this._marks[b] || []).concat(c(a))
        }, a.ScrollTracker = b
    }(this);

    var tracker = window.ScrollTracker();
    tracker.on({
        percentages: {
            every: [25]
        }
    }, function (evt) {
        if (evt.data.label === "25%") {
            sendEvent('view', 'page', '25');
        } else if (evt.data.label === "50%") {
            sendEvent('view', 'page', '50');
        } else if (evt.data.label === "100%") {
            sendEvent('view', 'page', '100');
        }
    });
</script>

<?= setting('credit.after_body') ?>
</body>
</html>
