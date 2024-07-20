<?php

namespace App\Http\Controllers;

use App\Datauser;
use App\Datapaket;
use App\Laporan;
use App\Tranksaksibaru;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
      public function index(Request $request){
         $datauser = Datauser::all();
        $datapaket = Datapaket::all();
        $datatranksaksi = Tranksaksibaru::all();

         if($request->has('search')){
        $data = Tranksaksibaru::where('tgl','id_paket','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
        $data = Tranksaksibaru::paginate(5);
        }
         
        return view('laporan.lndex',compact('data'));
    }

}