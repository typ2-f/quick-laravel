@extends('layouts.base')
@section('title', $appTitle)
@section('main')
{{--
  View::shareの動作チェック
  app/Http/Proveiders/AppServiceProvider.php -> boot()
--}}
<div>{{ $appTitle }}</div>

{{--
  エスケープに関する学習
  基本的にあまり気にする必要はないが、動的なHTMLを生成したいときは前者を使用する
  後者ではタグの文字列がそのまま出てしまう
  msg = '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" /><p>WINGSへようこそ</p>'
--}}

<div>{!! $msg !!}</div>
<div>{{ $msg }}</div>

{{--
  @ は中括弧に対するエスケープ記号
  verbatim,endverbatimで囲うのも同様に表示される
--}}
<p>@{{ $msg }}</p>

@verbatim
    <p>{{ $msg }}</p>
@endverbatim

<!--test-->
{{--
  <!--hoge-->はHTML標準のコメントアウト。
  クライアントに送信されるので、ソースを確認してもこの文章は出ないが上のtestは表示される。
--}}
@endsection
