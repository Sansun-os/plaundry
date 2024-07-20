<?php

namespace App\Http\Controllers;


use App\Datauser;
use App\Datapaket;
use App\Tranksaksibaru;
use Illuminate\Http\Request;

class RiwayattranksaksiController extends Controller
{
     public function index(Request $request){

         if($request->has('search')){
        $data = Tranksaksibaru::where('id_nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
        $data = Tranksaksibaru::paginate(5);
        }
         
        return view('riwayat_tranksaksi.riwayat_tranksaksi',compact('data'));
    }
    public function tampiltranksaksi(){
        $datauser = Datauser::all();
        $datapaket = Datapaket::all();
        $datatranksaksi = Tranksaksibaru::all();
        return view('riwayat_tranksaksi.tambah_tranksaksi',compact('datauser','datapaket','datatranksaksi'));
    }


     public function tambahtranksaksi(Request $request){
        $this->validate($request,[
       
        'kiloan' => 'required',
        'id_nama' => 'required',
        'id_paket' => 'required',
        'tgl' => 'required',
       
        'keterangan' => 'required',
        'jumlah' => 'required',
       
        ],[
            'kiloan.required' => 'kiloan harus diisi!',
            
            'tgl.required' => 'tgl harus diisi!',
          
            'jumlah.required' => 'jumlah harus diisi!',
            'keterangan.required' => 'keterangan harus diisi!',
        ]);
    Tranksaksibaru::create($request->all());
    return redirect('/riwayat_tranksaksi')->with('success','Data berhasil ditambahkan');
    }


    public function deletetranksaksi($id){
        $data = Tranksaksibaru::find($id);
        $data->delete();
        return redirect('/riwayat_tranksaksi')->with('danger','Data berhasil dihapus');
    }
    public function edittranksaksi($id){
         $datauser = Datauser::all();
        $datapaket = Datapaket::all();
       
         $data = Tranksaksibaru::find($id);
         return view('riwayat_tranksaksi.edit_tranksaksi',compact('data','datauser','datapaket'));
    }
    public function updatetranksaksi(Request $request, $id){
       
         $this->validate($request,[
       
        'kiloan' => 'required|min:1',
        'id_nama' => 'required',
        'id_paket' => 'required',
        'tgl' => 'required',
       
        'keterangan' => 'required',
        'jumlah' => 'required',
       
        ],[
            'kiloan.required' => 'kiloan harus diisi!',
            
            'tgl.required' => 'tgl harus diisi!',
          
            'jumlah.required' => 'jumlah harus diisi!',
            'keterangan.required' => 'keterangan harus diisi!',
        ]);
         $data = Tranksaksibaru::find($id);
        $data->update($request->all());
        
         return redirect('/riwayat_tranksaksi')->with('success','Data berhasil diubah');
    }
    public function laporan(Request $request){
        $datauser = Datauser::all();
        $datapaket = Datapaket::all();
        $datatranksaksi = Tranksaksibaru::all();

         if($request->has('search')){
        $data = Tranksaksibaru::where('tgl','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
        $data = Tranksaksibaru::paginate(5);
        }
         
        return view('laporan.lndex',compact('data'));
    }
}
