@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')
    <div class="card-group">
        <div class="card">
            <a class="b-frame b-frame-1" href="{{ $popup->url_1 }}" target="_blank">
                <img class="card-img-top" src="{{ Voyager::image($popup->image_1) }}" alt="{{ $popup->text_1 }}"/>
                <div class="card-body">
                    {{ $popup->text_1 }}
                </div>
            </a>
        </div>
    </div>
@endsection
