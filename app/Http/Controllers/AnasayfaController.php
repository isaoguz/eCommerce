<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $isim="baskan";
        $soyisim ='oğuz';
/*        return view('anasayfa',['isim'=>'İsa']);*/
/*        return view('anasayfa', compact('isim','soyisim'));*/
        return  view('anasayfa')->with(['isim'=>$isim,'soyisim'=>$soyisim]);
    }

}
