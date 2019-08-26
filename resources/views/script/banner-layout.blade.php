<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('banner/banner.css')}}"/>
</head>
<body>
@yield('content')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $.each($('.b-frame'), function (k, item) {
            var width = $(item).width();
            var height = $(item).height();
            var img = $(item).find('img');

            img.width(width).height(height);
        })
    });
</script>
</body>
</html>
