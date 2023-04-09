<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*----Chapter3----
|出力を直接生成することもできる
|Route:: get('/ hello', function() { return 'こんにちは、 世界！'; });
|
|配列構文での定義
|Route:: get('/ hello', [ HelloController::class, 'index' ]);
*/
//RouteServiceProviderでControllerの名前空間を登録しておくと更に単純化できる
Route::get('/hello', 'HelloController@index');
Route::get('/hello/view', 'HelloController@view');
Route::get('/hello/list', 'HelloController@list');

/*----chapter4----*/
//各URLをまとめたページが欲しいので、参考書にはない'/index'を追加
Route::get('/index', 'IndexController@index');

//chap5確認のため、controllerとprefixを利用
Route::controller(ViewController::class)->group(function () {
    Route::prefix('/view')->group(function () {
        Route::get('/escape', 'escape');
        Route::get('/comment', 'comment');
        Route::get('/if', 'if');
        Route::get('/unless', 'unless');
        Route::get('/isset', 'isset');
        Route::get('/switch', 'switch');
        Route::get('/while', 'while');
        Route::get('/for', 'for');
        Route::get('/foreach_assoc', 'foreach_assoc');
        Route::get('/foreach_loop', 'foreach_loop');
        Route::get('/forelse', 'forelse');
        Route::get('/style_class', 'style_class');
        Route::get('/checked', 'checked');
        Route::get('/master', 'master');
        Route::get('/comp', 'comp');
        Route::get('/list', 'list');
    });
});


/*----chapter5---------------------------------------------------------------*/
//主に数字のパラメーターの話
// Route::get('/route/param/{id}', 'RouteController@param');
// Route::get('/route/param/{id?}', 'RouteController@param');
Route::get('/route/param/{id?}', 'RouteController@param')
    ->name('param');
// Route::get('/route/param/{id?}', 'RouteController@param')
//   ->where([ 'id' => '[0-9]{2,3}']);
// Route::get('/route/param/{id?}', 'RouteController@param')
//   ->whereNumber('id');

//可変長パラメーター
Route::get('/route/search/{keywd?}', 'RouteController@search')
    ->where('keywd', '.*');

//名前空間でのコントローラー指定。コントローラーをフォルダで分割したときは視認性向上の可能性あり。
Route::namespace('Main')->group(function () {
    Route::get('/route/ns', 'RouteController@ns');
});

//viewを直接返す
Route::view('/route', 'route.view', ['name' => 'Laravel']);

//パラメーターをEnum型にできるらしい。Enum型ってなに？
Route::get('/route/enum_param/{category}', 'RouteController@enum_param');

Route::redirect('/hoge', '/');
Route::redirect('/fuga', '/', 301);

//resourceルートでCRUDをまとめて定義できる。exceptにより無効化の指定も可能。
Route::resource('/articles', 'ArticleController');
// Route::resource('/articles', 'ArticleController')
//     ->except([ 'edit', 'update' ]);

//resourceルートで複数のルートをまとめることも可能。
// Route::resources([
//     '/articles' => 'ArticleController',
//     '/hello' => 'HelloController',
//   ]);

// フォールバックルート。chapterで分ける都合でここに置くが、本来は全体の末尾で指定する。
// Route::fallback(function () {
//     return view('route.error');
//   });


/*----chapter6---------------------------------------------------------------*/