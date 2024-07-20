<?php

namespace App\Http\Controllers;

use App\Datapaket;
use Illuminate\Http\Request;

class DatapaketController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
        $data = Datapaket::where('nama_paket','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
        $data = Datapaket::paginate(5);
        }
         
        

        return view('kelola_paket.kelola_paket',compact('data'));
    }
    public function insertpaket(Request $request){
        // dd($request->all());
         $this->validate($request,[
        'nama_paket' => 'required|min:5|max:50',
        'harga' => 'required|max:50',
    ],[
        'nama_paket.required' => 'Nama Paket tidak boleh kosong!',
        'nama_paket.min' => 'Nama Paket tidak boleh kurang dari 5!',
        'harga.required' => 'Harga tidak boleh kosong!'
    ]);

        Datapaket::create($request->all());
          return redirect('/kelola_paket')->with('success','Data berhasil ditambahkan');
    }
    public function tampildatapaket($id){
        $data = Datapaket::find($id);
        // dd($data);
        return view('kelola_paket.edit_paket',compact('data'));
    }
    public function updatepaket(Request $request, $id){
             $this->validate($request,[
        'nama_paket' => 'required|min:5|max:50',
        'harga' => 'required|max:50',
        
    ],[
         'nama_paket.required' => 'Nama Paket tidak boleh kosong!',
         'nama_paket.min' => 'Nama Paket tidak boleh kurang dari 5!',
        'harga.required' => 'Harga tidak boleh kosong!'
    ]);

        $data = Datapaket::find($id);
        $data->update($request->all());
         return redirect('/kelola_paket')->with('success','Data berhasil diubah');
    }
    public function deletepaket($id){
        $data = Datapaket::find($id);
        $data->delete();
        return redirect('/kelola_paket')->with('danger','Data berhasil dihapus');
    }
    public function tambahpaket(){
        return view('kelola_paket.tambah_paket');
    }
}
