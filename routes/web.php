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



Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul') . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file);
	$response->header("Content-Type", $type);

	return $response;
});

Route::get('logout',function ()
{
	Auth::logout();
	return redirect(url('/'));
});

Route::get('/','UserInterface\ShowPictureController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@dashboard');

Route::group(['prefix' => 'kaumbapak'], function () {
                    Route::get('list', 'KaumBapakController@index');
                    Route::get('/edit/kepengurusan/{id}','KaumBapakController@edit');
                    Route::get('/edit/event/{id}','KaumBapakController@editevent');
                    Route::get('/edit/foto/{id}','KaumBapakController@editfoto');
                    Route::get('/add/event','KaumBapakController@add_event');
                    Route::post('/save/event','KaumBapakController@saveevent');
                    Route::post('/save/foto','KaumBapakController@savefoto');
                    Route::post('/update/kepengurusan','KaumBapakController@update');
                    Route::post('/update/foto','KaumBapakController@updatefoto');
                    Route::post('/update/event','KaumBapakController@updateevent');
                    Route::get('/delete/event/{id}','KaumBapakController@deleteevent');
                    Route::get('/delete/foto/{id}','KaumBapakController@deletefoto');
                    Route::get('/add/foto/','KaumBapakController@add_foto');
                });

Route::group(['prefix' => 'kaumibu'], function () {
                    Route::get('list', 'KaumIbuController@index');
                    Route::get('/edit/kepengurusan/{id}','KaumIbuController@edit');
                    Route::get('/edit/event/{id}','KaumIbuController@editevent');
                    Route::get('/edit/foto/{id}','KaumIbuController@editfoto');
                    Route::get('/add/event','KaumIbuController@add_event');
                    Route::post('/save/event','KaumIbuController@saveevent');
                    Route::post('/save/foto','KaumIbuController@savefoto');
                    Route::post('/update/kepengurusan','KaumIbuController@update');
                    Route::post('/update/foto','KaumIbuController@updatefoto');
                    Route::post('/update/event','KaumIbuController@updateevent');
                    Route::get('/delete/event/{id}','KaumIbuController@deleteevent');
                    Route::get('/delete/foto/{id}','KaumIbuController@deletefoto');
                    Route::get('/add/foto/','KaumIbuController@add_foto');
                });

Route::group(['prefix' => 'pemuda'], function () {
                    Route::get('list', 'PemudaController@index');
                    Route::get('/edit/kepengurusan/{id}','PemudaController@edit');
                    Route::get('/edit/event/{id}','PemudaController@editevent');
                    Route::get('/edit/foto/{id}','PemudaController@editfoto');
                    Route::get('/add/event','PemudaController@add_event');
                    Route::post('/save/event','PemudaController@saveevent');
                    Route::post('/save/foto','PemudaController@savefoto');
                    Route::post('/update/kepengurusan','PemudaController@update');
                    Route::post('/update/foto','PemudaController@updatefoto');
                    Route::post('/update/event','PemudaController@updateevent');
                    Route::get('/delete/event/{id}','PemudaController@deleteevent');
                    Route::get('/delete/foto/{id}','PemudaController@deletefoto');
                    Route::get('/add/foto/','PemudaController@add_foto');
                });

Route::group(['prefix' => 'remaja'], function () {
                    Route::get('list', 'RemajaController@index');
                    Route::get('/edit/kepengurusan/{id}','RemajaController@edit');
                    Route::get('/edit/event/{id}','RemajaController@editevent');
                    Route::get('/edit/foto/{id}','RemajaController@editfoto');
                    Route::get('/add/event','RemajaController@add_event');
                    Route::post('/save/event','RemajaController@saveevent');
                    Route::post('/save/foto','RemajaController@savefoto');
                    Route::post('/update/kepengurusan','RemajaController@update');
                    Route::post('/update/foto','RemajaController@updatefoto');
                    Route::post('/update/event','RemajaController@updateevent');
                    Route::get('/delete/event/{id}','RemajaController@deleteevent');
                    Route::get('/delete/foto/{id}','RemajaController@deletefoto');
                    Route::get('/add/foto/','RemajaController@add_foto');
                });

Route::group(['prefix' => 'sekolahminggu'], function () {
                    Route::get('list', 'SekolahMingguController@index');
                    Route::get('/edit/kepengurusan/{id}','SekolahMingguController@edit');
                    Route::get('/edit/event/{id}','SekolahMingguController@editevent');
                    Route::get('/edit/foto/{id}','SekolahMingguController@editfoto');
                    Route::get('/add/event','SekolahMingguController@add_event');
                    Route::post('/save/event','SekolahMingguController@saveevent');
                    Route::post('/save/foto','SekolahMingguController@savefoto');
                    Route::post('/update/kepengurusan','SekolahMingguController@update');
                    Route::post('/update/foto','SekolahMingguController@updatefoto');
                    Route::post('/update/event','SekolahMingguController@updateevent');
                    Route::get('/delete/event/{id}','SekolahMingguController@deleteevent');
                    Route::get('/delete/foto/{id}','SekolahMingguController@deletefoto');
                    Route::get('/add/foto/','SekolahMingguController@add_foto');
                });

Route::group(['prefix' => 'jadwal'], function () {
                    Route::get('list', 'JadwalController@index');
                    Route::get('edit/{id}','JadwalController@edit');
                    Route::post('update','JadwalController@update');
                    Route::get('add','JadwalController@add');
                    Route::post('save','JadwalController@save');
                    Route::get('delete/{id}','JadwalController@delete');

                });

Route::group(['prefix' => 'ringkasankhotbah'], function () {
                    Route::get('list', 'RingkasanKhotbahController@index');
                    Route::get('edit/{id}','RingkasanKhotbahController@edit');
                    Route::post('update','RingkasanKhotbahController@update');
                    Route::get('add','RingkasanKhotbahController@add');
                    Route::post('save','RingkasanKhotbahController@save');
                    Route::get('delete/{id}','RingkasanKhotbahController@delete');

                });