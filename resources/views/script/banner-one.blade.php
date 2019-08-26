@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')
    <div class="b-frames">
        <a class="b-frame b-frame-width" href="{{ $popup->url_1 }}" target="_blank">
            <img class="b-img" src="{{ Voyager::image($popup->image_1) }}" alt="{{ $popup->text_1 }}"/>
            <div class="b-frame-text">
                {{ $popup->text_1 }}
            </div>
        </a>
    </div>
@endsection
