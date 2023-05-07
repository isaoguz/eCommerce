<?php

namespace App\Http\Controllers\Yonetim;

use App\Models\Siparis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnasayfaController extends Controller
{
    public function index()
    {
        $bekleyen_siparis = Siparis::where('durum','Siparişiniz alındı')->count();


        $odeme_onaylandı = Siparis::where('durum','Ödeme onaylandı')->count();
        $kargoya_verildi = Siparis::where('durum','Kargoya verildi')->count();
        $siparis_tamamlandı = Siparis::where('durum','Siparis tamamlandı')->count();

        return view('yonetim.anasayfa',compact('bekleyen_siparis',
            'odeme_onaylandı','kargoya_verildi','siparis_tamamlandı'));
    }
}
