@extends('layouts.base')
@section('title', 'component')
@section('main')
    {{--
    <x-my-alert type="success" :alert-title="$title">
        コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
    </x-my-alert>
  --}}

    <x-my-alert type="primary" :alert-title="$title">
        コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
        <!-- x-slot:名前 でコンポーネント内に作ったスロットへ直で渡すこともできる-->
        <x-slot:footer>
            フッターテキスト
            </x-slot>
    </x-my-alert>


    {{--
      動的コンポーネント　"コンポーネントを"変数で指定する
  <x-dynamic-component :component="$comp" type="success" :alert-title="$title">
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
  </x-dynamic-component>
  --}}

    {{--
      サブビュー
      スロットなどの概念がないので全て@includeの引数として渡す。美しくはない。
  @include('components.my-alert', [
    'type' => 'success',
    'alertTitle' => 'はじめてのコンポーネント',
    'slot' => 'コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！',
  ])
  --}}
@endsection
