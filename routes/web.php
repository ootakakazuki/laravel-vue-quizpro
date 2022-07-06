<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Models\Quiz;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('start');

});

Auth::routes();  // ログイン認証機能を呼び出している
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// クイズの追加
Route::post('/questions', function(Request $request){
    //
});


// クイズの削除
Route::delete('/questions/{book}', function(Book $book){
    //
});

/*
Route::get('/select_wh', funtion () {
    return view('select_wh');
});
*/

Route::get('/select_wh', function () {
    $questions = Quiz::orderBy('id', 'asc') -> get();
    return view('select_wh',[
        'questions' => $questions
    ]);
    //return view('select_wh');
});

Route::get('/adminpage', [QuizController::class, 'index']);

/*
Route::get('/adminpage', function () {
    return view('adminpage');
});

*/



