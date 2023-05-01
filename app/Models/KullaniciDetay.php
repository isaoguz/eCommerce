<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KullaniciDetay extends Model
{
    protected  $table = "kullanici_detay";
    public $timestamps = false;
    protected $quarded = [];

    protected $fillable = ['id','kullanici_id', 'adres','telefon','ceptelefonu'];


    public function kullanici()
    {
        return $this->belongsTo('App\Models\Kullanici');
    }
}
