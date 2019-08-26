@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')
    <div class="b-frames">
        <a class="b-frame" href="{{ $popup->url_1 }}" target="_blank" style="background: url('{{ Voyager::image($popup->image_1) }}') no-repeat; background-size: contain">
            <div class="b-frame-text">
                {{ $popup->text_1 }}
            </div>
        </a>
    </div>
@endsection
