@extends('script.banner-layout')

<?php /** @var \App\Popup $popup */ ?>

@section('content')
    {{ $popup->html }}
@endsection
