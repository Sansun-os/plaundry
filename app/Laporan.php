<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';
    protected $fillable = ['kd_invoice','id_nama','id_paket','tgl','batas_waktu','pembayaran','keterangan','jumlah','kiloan','id_harga'];
    protected $dates = ['tgl'];
    
    public function datauser(){
        return $this->belongsTo(Datauser::class,'id_nama','id_nama');
    }
     public function datapaket(){
        return $this->belongsTo(Datauser::class,'id_paket','harga','id','id_harga');
    }
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['tgl'])->translatedFormat('l,d F Y');
    }
}
