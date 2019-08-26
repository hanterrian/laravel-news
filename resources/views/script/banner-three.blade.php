@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')

    <div class="b-frames">
        @if($popup->url_1)
            <a class="b-frame b-frame-1" href="{{ $popup->url_1 }}" target="_blank" style="background: url('{{ Voyager::image($popup->image_1) }}') no-repeat; background-size: contain">
                <div class="b-frame-text">
                    {{ $popup->text_1 }}
                </div>
            </a>
        @endif

        @if($popup->url_2)
            <a class="b-frame b-frame-2" href="{{ $popup->url_2 }}" target="_blank" style="background: url('{{ Voyager::image($popup->image_2) }}') no-repeat; background-size: contain">
                <div class="b-frame-text">
                    {{ $popup->text_2 }}
                </div>
            </a>
        @endif

        @if($popup->url_3)
            <a class="b-frame b-frame-3" href="{{ $popup->url_3 }}" target="_blank" style="background: url('{{ Voyager::image($popup->image_3) }}') no-repeat; background-size: contain">
                <div class="b-frame-text">
                    {{ $popup->text_3 }}
                </div>
            </a>
        @endif
    </div>
@endsection
