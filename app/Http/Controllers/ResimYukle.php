<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimYukleme(Request $request)
    {
        echo $resimadi=$request->resim->getClientOriginalName();// file  adına ulaşan fonksiyon
        echo "<br>";
        echo $resim=rand(0,1000).".".$request->resim->getClientOriginalExtension();// file uzantısına ulaşan fonk.
        $yukle=$request->resim->move(public_path('images'),$resimadi);//public path public için yolunu bulur
}
}
