<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.logo')) }}"/>

    <?= setting('analytics.after_header') ?>
</head>
<body>
@yield('header')

<div class="container">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
<?= setting('analytics.after_body') ?>
</body>
</html>
