<?php
use App\Log;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/logs', function (\Illuminate\Http\Request $request) {
    $newLog = new Log;
    $newLog->sunlight = $request->input("t");
    $newLog->sunlight_percent = intval($newLog->sunlight)/147;
    $newLog->save();
    die($request->input("t"));
});

Route::get('/logs', function (\Illuminate\Http\Request $request) {
    return Log::all();
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
