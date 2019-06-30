<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.logo')) }}"/>

    <link rel="manifest" href="/manifest.json">

    @if(setting('app.enable'))
        <meta name="apple-itunes-app" content="app-id=54400766423232324">
        <meta name="google-play-app" content="app-id=com.finapps.toploansatstakeinukraine">

        <link rel="apple-touch-icon" href="{{ asset('smartbanner/smart-app-banner.png') }}">
        <link rel="android-touch-icon" href="{{ asset('smartbanner/smart-app-banner.png') }}"/>

        <link rel="stylesheet" href="{{ asset('smartbanner/smart-app-banner.css') }}">
    @endif

    <?= setting('analytics.after_header') ?>
</head>
<body>
@yield('header')

<div class="container">
    @yield('content')

    <footer class="page-footer font-small blue pt-4">
        <div class="footer-copyright text-center py-3">
            <a href="https://play.google.com/store/apps/details?id=com.finapps.toploansatstakeinukraine" target="_blank">
                <img src="{{ asset('apps/google_play_UAfinPro1111.png') }}" alt="google play app"/>
            </a>
        </div>
        <div class="footer-copyright text-center py-3">
            <a href="{{ url('/page/privacy-policy') }}" target="_blank">Политика конфиденциальности</a>
        </div>
    </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>

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

<script>
    !function (e, t, d, s, a, n, c) {
        e[a] = {}, e[a].date = (new Date).getTime(), n = t.createElement(d), c = t.getElementsByTagName(d)[0], n.type = "text/javascript", n.async = !0, n.src = s, c.parentNode.insertBefore(n, c)
    }(window, document, "script", "https://zaimcijworldcom.push.world/https.embed.js", "pw"), pw.websiteId = "7cfa760b22cf3b1aa3ed748a1de524b8250491036460995f421d4fddb5ef0255";
</script>

<?= setting('analytics.after_body') ?>
</body>
</html>
