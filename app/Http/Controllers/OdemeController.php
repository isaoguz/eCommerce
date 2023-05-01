<?php

namespace App\Http\Controllers;

use App\Models\Siparis;
use Cart;
use Illuminate\Http\Request;

class OdemeController extends Controller
{
    public  function index(){

        if (!auth()->check())
        {
            return redirect()->route('kullanici.oturumac')
                ->with('mesaj_tur','info')
                ->with('mesaj','Ödeme işlemi için oturum açmanız veya kullanıcı kayıdı yapmanız gerekmektedir.');
        }
        else if (count(Cart::content())==0)
        {
            return redirect()->route('anasayfa')
                ->with('mesaj_tur','info')
                ->with('mesaj','Ödeme işlemi için sepete ürün eklemelisiniz.');
        }

        $kullanici_detay = auth()->user()->detay;


        return view('odeme',compact('kullanici_detay'));
    }

    public function odemeyap()
    {
        $siparis = request()->all();
        $siparis['sepet_id'] =session('aktif_sepet_id');
        $siparis['banka'] = "Garanti";
        $siparis['taksit_sayisi'] = 1;
        $siparis['durum'] = "Siparişiniz alındı";
        $siparis['siparis_tutari'] = Cart::subtotal();

        Siparis::create($siparis);
        Cart::destroy();
        session()->forget('aktif_sepet_id');
        return redirect()->route('siparisler')
            ->with('mesaj_tur','success')
            ->with('mesaj','Siparişiniz başarılı bir şekilde gerçekleşti.');
    }
}
