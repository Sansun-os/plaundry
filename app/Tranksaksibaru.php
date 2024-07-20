<?php

namespace App;

use App\Datauser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Tranksaksibaru extends Model
{
    protected $table = 'tranksaksibarus';
    protected $fillable = ['kd_invoice','id_nama','id_paket','tgl','batas_waktu','pembayaran','keterangan','jumlah','kiloan','id_harga'];
    protected $dates = ['tgl'];
    
    public function datauser(){
        return $this->belongsTo(Datauser::class,'id','id_nama');
    }
     public function datapaket(){
        return $this->belongsTo(Datauser::class,'id_paket','harga','id','id_harga');
    }
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['tgl'])->translatedFormat('l,d F Y');
    }
}
