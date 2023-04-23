<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('kategori')->truncate();

        $id =  DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'Elektronik']);
        DB::table('kategori')->insert(['kategori_adi' => 'Mousee','slug'=>'mouse','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Klavye','slug'=>'klavye','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Adaptörler','slug'=>'adaptorler','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kağıt Türleri','slug'=>'KagitTurleri']);
        DB::table('kategori')->insert(['kategori_adi' => 'A4 Kağıtları','slug'=>'a4kagit','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Dosya Kağıtları','slug'=>'dosyakagit','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Arşiv Kağıtları','slug'=>'arsivkagit','ust_id'=>$id]);

        DB::table('kategori')->insert(['kategori_adi'=>'Masa','slug'=>'Masa']);
        DB::table('kategori')->insert(['kategori_adi'=>'Yazıcı','slug'=>'Yazıcı']);
        DB::table('kategori')->insert(['kategori_adi'=>'Defter','slug'=>'Defter']);
        DB::table('kategori')->insert(['kategori_adi'=>'Sandalye','slug'=>'Sandalye']);
        DB::table('kategori')->insert(['kategori_adi'=>'Aksesuar','slug'=>'Aksesuar']);
        DB::table('kategori')->insert(['kategori_adi'=>'Işıklandırma','slug'=>'Işıklandırma']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //
    }
}
