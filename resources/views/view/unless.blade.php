@extends('layouts.base')
@section('title', 'unless')
@section('main')
    @unless ($random === 50)
        <p>{{ $random }}は、50ではありません！</p>
    @endunless
@endsection
