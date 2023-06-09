@extends('layouts.master')
@section('title', $urun->urun_adi)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Anasayfa</a></li>
            @foreach($kategoriler as $kategori)
                <li><a href="{{route('kategori',$kategori->slug)}}">{{$kategori->kategori_adi}}</a></li>
            @endforeach
            <li class="active" style="font-family:Arial">{{$urun->urun_adi}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ $urun->detay->urun_resmi!=null ? asset('uploads/urunler/' . $urun->detay->urun_resmi) : 'http://via.placeholder.com/300x300?text=UrunResmi' }}" class="img-responsive">
                    <hr>
{{--
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60x60?text=UrunResmi"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60x60?text=UrunResmi"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://via.placeholder.com/60x60?text=UrunResmi"></a>
                        </div>
                    </div>
--}}
                </div>
                <div class="col-md-7">
                    <h1 style="font-family:Arial"> {{$urun->urun_adi}}</h1>
                    <p class="price" style="font-family:Arial">{{$urun->fiyati}} TL</p>
                    <form action="{{route('sepet.ekle')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$urun->id}}">
                        <input type="submit" style="background-color: #6cb2eb;" class="btn btn-theme" value="Sepete Ekle">
                    </form>

                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active" style="font-family:Arial"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation" style="font-family:Arial"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1" style="font-family:Arial">{{$urun->aciklama}}</div>
                    <div role="tabpanel" class="tab-pane" id="t2" style="font-family:Arial">Henüz yorum yapılmadı.</div>
                </div>
            </div>

        </div>
    </div>
@endsection
