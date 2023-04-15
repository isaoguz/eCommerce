<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $isim="baskan";
        $soyisim ='oğuz';
        $isimler = ['isa','alpay','elif','reyhan'];
        $kullanicilar = [
            ['id'=>1,'kullanici_adi'=>'İsa'],
            ['id'=>2,'kullanici_adi'=>'Ali'],
            ['id'=>3,'kullanici_adi'=>'Veli'],
            ['id'=>4,'kullanici_adi'=>'Deli'],
            ['id'=>5,'kullanici_adi'=>'Deli']

        ];
/*        return view('anasayfa',['isim'=>'İsa']);*/
/*        return view('anasayfa', compact('isim','soyisim'));*/
/*        return  view('anasayfa')->with(['isim'=>$isim,'soyisim'=>$soyisim]);*/
        return view('anasayfa',compact('isim','soyisim','isimler','kullanicilar'));
    }

}
