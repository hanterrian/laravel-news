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
        <meta name="apple-itunes-app" content="<?= setting('app.apple') ?>">
        <meta name="google-play-app" content="<?= setting('app.google') ?>">

        <link rel="stylesheet" href="{{ asset('css/jquery.smartbanner.css') }}">
    @endif

    <?= setting('analytics.after_header') ?>
</head>
<body>
@yield('header')

<div class="container">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>

@if(setting('app.enable'))
    <script src="{{ asset('js/jquery.smartbanner.js') }}"></script>
    <script>
        $.smartbanner({
            title: null,
            author: null,
            price: '{{ setting('app.price', 'FREE') }}',
            appStoreLanguage: 'us',
            inAppStore: '{{ setting('app.app_store_title') }}',
            inGooglePlay: '{{ setting('app.app_google_title') }}',
            GooglePlayParams: null,
            icon: null,
            iconGloss: null,
            url: null,
            button: 'VIEW',
            scale: 'auto',
            speedIn: 300,
            speedOut: 400,
            daysHidden: 15,
            daysReminder: 90,
            force: null,
            hideOnInstall: true,
            layer: false,
            iOSUniversalApp: true,
            appendToSelector: 'body',
        })
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
