@extends('layouts.base')
@section('title', 'style_class')
@section('main')
    <div @class(['column', 'notice' => $isEnabled, 'example' => !$isEnabled])>classディレクティブ</div>
@endsection
