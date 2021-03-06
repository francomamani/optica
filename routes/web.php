<?php

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
    return view('welcome');
});

Route::get('opticas', 'OpticaController@index')->name('optica.index');
Route::get('optica/{id}', 'OpticaController@show')->name('optica.show');
Route::get('optica', 'OpticaController@create')->name('optica.create');
Route::get('optica-edit/{id}', 'OpticaController@edit')->name('optica.edit');

Route::post('opticas-buscar', 'OpticaController@buscar')->name('optica.buscar');
Route::post('opticas', 'OpticaController@store')->name('optica.store');
Route::put('optica/{id}', 'OpticaController@update')->name('optica.update');
Route::delete('optica/{id}', 'OpticaController@destroy')->name('optica.destroy');

Route::get('oftalmologos', 'OftalmologoController@index')->name('oftalmologo.index');
Route::get('oftalmologo', 'OftalmologoController@create')->name('oftalmologo.create');
Route::post('oftalmologos', 'OftalmologoController@store')->name('oftalmologo.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mostrar la tabla
Route::get('documentos', 'DocumentoController@index')->name('documento.index');

Route::get('documento', 'DocumentoController@create')->name('documento.create');
Route::post('documentos', 'DocumentoController@store')->name('documento.store');
Route::post('descargar-documento/{documento_id}', 'DocumentoController@descargarDocumento');
/* generar pdf */
Route::get('reportes', 'ClienteController@reportes');
Route::post('generar-pdf', 'ClienteController@generarPDF');



Route::get('diagnosticos-chart', 'ChartController@pie');
Route::get('backup', 'BackupController@create');
Route::post('crear-backup', 'BackupController@crearBackup');
Route::post('enviar', 'CorreoController@enviar');





