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
Route::get('/hello', 'HelloController@view');
Route::get('/hello/list', 'HelloController@list');


