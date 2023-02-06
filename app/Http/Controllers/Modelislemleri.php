<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;
class Modelislemleri extends Controller
{
    public function liste()
    {
        //$bilgi=Bilgiler::where('id',2)->first();
        //$bilgi=Bilgiler::whereId(2)->first(); whereden sonra ilk harf büyük sütun adı yazılabilir.
        $bilgi=Bilgiler::find(3);
        echo $bilgi->metin;
    }
    public function ekle()
    {
        Bilgiler::create([
            "metin" => "Model ile eklendi",
        ]);
    }
    public function guncelle()
    {
        Bilgiler::whereId(4)->update([
            "metin" => "Model ile güncellendi.",
        ]);
    }
    public function sil()
    {
        Bilgiler::whereId(4)->delete();
    }
}
