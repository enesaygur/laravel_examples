<?php

namespace App\Http\Controllers;

class Yonet extends Controller
{
    public function site(){
        $data["yazi1"]="Php Kodlarım";
        $data["yazi2"]="Hoş geldin";
        $data["yazi3"]="Hizmetlerimiz";
        $data["yazi4"]="Web tasarım ve yazılım hizmetleri";
        $data["yazi5"]="Bize Ulaşın";
        return view('web',$data);

    }
}
