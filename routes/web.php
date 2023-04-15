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

/*Route::get('/', function () {
    return view('anasayfa');
});*/


Route::get('/merhaba',function (){
    return "Merahaba";
});


Route::get('/api/v1/merhaba',function (){
    return ['message'=>'Merhaba'];
});


Route::get('/urun/{urunAdi}/{id?}',function ($urunAdi,$id=0){
    return "Ürün Adı :  $id $urunAdi ";
})->name('urun_detay');

Route::get('/kampanya',function (){
    return redirect()->route('urun_detay',['urunAdi'=>'elma','id'=>5]);
});


//Controller ile kullanımı
Route::get('/','AnasayfaController@index')->name('anasayfa');
