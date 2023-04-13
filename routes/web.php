<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use App\Http\Middleware\LogMiddleware;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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
Route::get('/hello/list', 'HelloController@list')->name('list');

/*----chapter4----*/
//各URLをまとめたページが欲しいので、参考書にはない'/index'を追加
Route::get('/index', 'IndexController@index');

//chap5.3.1/2確認のため、controllerとprefixを利用
Route::controller(ViewController::class)->group(function () {
    Route::prefix('/view')->group(function () {
        Route::get('/escape', 'escape')->name('escape');
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

//パラメーターをEnum型にできる
Route::get('/route/enum_param/{category}', 'RouteController@enum_param');

Route::redirect('/hoge', '/index');
Route::redirect('/fuga', '/index', 301);

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
Route::controller(CtrlController::class)->group(function () {
    Route::prefix('/ctrl')->group(function () {
        Route::get('/plain' , 'plain');
        Route::get('/header', 'header');
        Route::get('/outJson', 'outJson');
        Route::get('/outFile', 'outFile');
        Route::get('/outCsv', 'outCsv');
        Route::get('/outImage', 'outImage');
        Route::get('/redirectBasic', 'redirectBasic');
        Route::get('/index', 'index');
        Route::get('/hoge/{id?}', 'hoge');
        Route::get('/form/{name?}', 'form');
        Route::post('/result', 'result');
        Route::get('/upload', 'upload');
        Route::post('/uploadfile', 'uploadfile');
        Route::get('/middle', 'middle');
        //->middleware(LogMiddleware::class);
        // ->middleware(LogMiddleware::class, HogeMiddleWare::class);
        // Route::group(['middleware' => [ 'debug' ]], function () {
        //     Route::get('/ctrl/middle', 'CtrlController@middle');
        //   });
        // Route::get('/ctrl/middle', 'CtrlController@middle');
    });
});
Route::get('/ctrl/basic', 'CtrlController@basic');


/*----chapter7---------------------------------------------------------------*/
Route::get('/state/recCookie', 'StateController@recCookie');
Route::get('/state/delCookie', 'StateController@delCookie');
Route::get('/state/readCookie', 'StateController@readCookie');
Route::get('/state/session1', 'StateController@session1');
Route::get('/state/session2', 'StateController@session2');

/*----chapter8---------------------------------------------------------------*/
Route::get('/record/find', 'RecordController@find');
Route::get('/record/where', 'RecordController@where');
Route::get('/record/hasmany', 'RecordController@hasmany');

/*----chapter9---------------------------------------------------------------*/
Route::get('/save/create', 'SaveController@create');
Route::post('/save', 'SaveController@store');
Route::get('/save/{id}/edit', 'SaveController@edit');
Route::patch('/save/{id}', 'SaveController@update');
Route::get('/save/{id}', 'SaveController@show');
Route::delete('/save/{id}', 'SaveController@destroy');

// Route::resource('/save', 'SaveController');
// Route::resource('/save', 'SaveController')
//     ->except([ 'edit', 'update' ]);