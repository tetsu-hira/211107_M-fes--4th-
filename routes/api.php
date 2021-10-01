<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 追加機能
Route::group(['middleware' => 'api'], function(){
  Route::get('get', 'PostController@addTeam');
  Route::post('add', 'PostController@addTeam');
  Route::get('get', 'PostController@delTeam');
  Route::post('del', 'PostController@delTeam');
});

Route::get('/post',function (Request $request) {
  $posts = App\Models\post::all();
  return response()->json(['posts'=> $posts]);
});
Route::get('/court',function (Request $request) {
  $courts = App\Models\court::all();
  return response()->json(['courts'=> $courts]);
});
Route::get('/number',function (Request $request) {
  $numbers = App\Models\number::all();
  return response()->json(['numbers'=> $numbers]);
});

