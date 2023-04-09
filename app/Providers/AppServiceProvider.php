<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //View::shareメソッドで全てのviewにデータを共有できる。今回はページタイトル。
        //認証済みユーザ変数の場合はView::composer
        View::share('appTitle','速習Laravel');
    }
}
