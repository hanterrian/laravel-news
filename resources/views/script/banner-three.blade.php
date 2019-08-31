@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')
    <div class="card-group">
        @if($popup->url_1)
            <div class="card">
                <a class="b-frame b-frame-1" href="{{ $popup->url_1 }}" target="_blank">
                    <img class="card-img-top" src="{{ Voyager::image($popup->image_1) }}" alt="{{ $popup->text_1 }}"/>
                    <div class="card-body">
                        {{ $popup->text_1 }}
                    </div>
                </a>
            </div>
        @endif

        @if($popup->url_2)
            <div class="card">
                <a class="b-frame b-frame-1" href="{{ $popup->url_2 }}" target="_blank">
                    <img class="card-img-top" src="{{ Voyager::image($popup->image_2) }}" alt="{{ $popup->text_2 }}"/>
                    <div class="card-body">
                        {{ $popup->text_2 }}
                    </div>
                </a>
            </div>
        @endif

        @if($popup->url_3)
            <div class="card">
                <a class="b-frame b-frame-1" href="{{ $popup->url_3 }}" target="_blank">
                    <img class="card-img-top" src="{{ Voyager::image($popup->image_3) }}" alt="{{ $popup->text_3 }}"/>
                    <div class="card-body">
                        {{ $popup->text_3 }}
                    </div>
                </a>
            </div>
        @endif
    </div>
@endsection
