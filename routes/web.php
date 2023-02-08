<?php

use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\Uyelikislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Iletisim;
use Illuminate\Support\Facades\Route;

Route::get('/',  function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name("anasayfa");

Route::get('/home', [HomeController::class, 'index'])->name("home");
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber(  'id')->whereAlpha('name')->name("test");
//where string veya integer olacağını yazmak için kullanıldı.//  ->where('id','[0-9]+') //

Route::get('/web',[Yonet::class ,'site'])->name('web');
Route::get('/form',[Formislemleri::class,'gorunum']);
Route::middleware('arakontrol')->post('form-sonuc',[Formislemleri::class,'sonuc'])->name('sonuc');
Route::get('/ekle',[Veritabaniislemleri::class,'ekle']);
Route::get('/update',[Veritabaniislemleri::class,'update']);
Route::get('/delete',[Veritabaniislemleri::class,'delete']);
Route::get('/bilgiler',[Veritabaniislemleri::class,'bilgiler']);
Route::get('/modelliste',[Modelislemleri::class,'liste']);
Route::get('/modelekle',[Modelislemleri::class,'ekle']);
Route::get('/modelguncelle',[Modelislemleri::class,'guncelle']);
Route::get('/modelsil',[Modelislemleri::class,'sil']);
Route::get("/iletisim",[Iletisim::class,"index"]);
Route::post("/iletisim-sonuc",[Iletisim::class,"ekleme"])->name("iletisim-sonuc");
Route::get("/upload",function ()
{
    return view("upload");
});
Route::post("/resim-ilet",[ResimYukle::class,"resimYukleme"])->name("yukle");
Route::get("/uye",function (){
    return view("uyelik");
});
Route::post("uye-kayit",[Uyelikislemleri::class,"uyekayit"])->name("uyekayit");
