<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisimmodel;

class Iletisim extends Controller
{
    public function  index()
    {
        return view("iletisim");
    }
    public function ekleme(Request $request)
    {
        $adsoyad=$request->adsoyad;
        $mail=$request->mail;
        $telefon=$request->telefon;
        $metin=$request->metin;
        Iletisimmodel::create([
            "adsoyad" => $adsoyad,
            "mail" => $mail,
            "telefon" => $telefon,
            "metin" => $metin,
        ]);
        echo "Bilgiler veritabanına kaydedildi.";
    }
}
