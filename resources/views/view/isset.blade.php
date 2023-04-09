@extends('layouts.base')
@section('title', 'isset')
@section('main')
    {{-- 
@isset($msg)
  <p>変数msgは「{{ $msg }}」です。</p>
@endisset
 --}}

    {{-- 
@empty($msg)
  <p>メッセージがありません！</p>
@endempty
 --}}

    @isset($msg)
        <p>変数msgは「{{ $msg }}」です。</p>
    @else
        <p>メッセージがありません！</p>
    @endisset
@endsection
