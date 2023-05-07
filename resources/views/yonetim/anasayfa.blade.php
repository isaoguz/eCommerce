@extends('yonetim.layouts.master')
@section('title','Anasayfa')
@section('content')
    <h1 class="page-header" style="text-align: center">Kontrol Paneli</h1>

    <section class="row text-center placeholders" >
        <div class="col-6 col-sm-3" >
            <div class="panel panel-default" >
                <div class="panel-heading" style="background-color: #6cb2eb;color: white "><b>Bekleyen Siparişler</b> </div>
                <div class="panel-body">
                    <h4>{{$bekleyen_siparis}}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #6cb2eb; color: white"><b>Onaylanan Ödemeler</b> </div>
                <div class="panel-body">
                    <h4>{{$odeme_onaylandı}}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #6cb2eb; color: white"><b>Kargoya Verilenler</b> </div>
                <div class="panel-body">
                    <h4>{{$kargoya_verildi}}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #6cb2eb; color: white"><b>Tamamlanan Siparişler</b> </div>
                <div class="panel-body">
                    <h4>{{$siparis_tamamlandı}}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
    </section>

@endsection

