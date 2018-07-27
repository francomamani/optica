<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//127.0.0.1:8000/api/optica-eliminar/1
//localhost:8000/api/optica-eliminar/1
Route::get('opticas', 'OpticaController@listar');
Route::delete('optica-eliminar/{id}', 'OpticaController@destroy');








