<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table('bilgiler')->insert([
            "metin" =>"Yeni metin"
        ]);
    }

    public function update()
    {
        DB::table('bilgiler')->where("id",1)->update([
            "metin"=>"Güncellendi"
        ]);
    }
    public function delete(){
        DB::table('bilgiler')->where("id",1)->delete();
    }
    public function bilgiler()
    {
        $data=DB::table('bilgiler')->get();
       // print_r($data);
       /* foreach($data as $key => $value)
        {
            echo $value->id,"  ",$value->metin;
            echo "<br>";
        }*/
        $veri=DB::table('bilgiler')->where("id",3)->first();// tek bir veri yazdırmak için first yazılır objeyi dönüştürür.
        echo $veri->metin;
    }
}
