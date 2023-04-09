@extends('layouts.base')
@section('title', 'switch')
@section('main')
    @switch($random)
        @case(5)
            <p>大ラッキーの一日です！</p>
        @break

        @case(4)
            <p>ちょっぴり良いことがあるかも？</p>
        @break

        @case(3)
            <p>ふつーの一日です。</p>
        @break

        @case(2)
            <p>今日は静かに過ごしましょう…</p>
        @break

        @default
            <p>umm…</p>
    @endswitch
@endsection
