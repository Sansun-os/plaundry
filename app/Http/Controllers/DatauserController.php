<?php

namespace App\Http\Controllers;

use App\Datauser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DatauserController extends Controller
{
    public function index(Request $request){
 if($request->has('search')){
        $datauser = Datauser::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
        $datauser = Datauser::paginate(5);
        }
        
        return view('kelola_users.kelola_user',compact('datauser'));
    }

    public function delete($id)
    {
    $datauser = Datauser::find($id);
    $datauser->delete();
    return redirect('/kelola_user')->with('danger','Data Berhasil Di hapus');
    }

    public function insertdata(Request $request)
    {
        $this->validate($request,[
        'nama' => 'required|min:10|max:20',
        'alamat' => 'required|max:50',
        'jenis_kelamin' => 'required|max:50',
        'telepon' => 'required|min:10|max:13|unique:datausers',
    ],[
        'nama.required' => 'Nama user tidak boleh kosong!',
        'nama.min' => 'Nama user tidak boleh kurang dari 5!',
        'alamat.required' => 'Alamat tidak boleh kosong!',
        'telepon.required' => 'Telepon tidak boleh kosong!',
        'telepon.min' => 'Telepon tidak boleh kurang dari 10!',
        'telepon.max' => 'Telepon tidak boleh lebih dari 13!',
        'telepon.unique' => 'No telepon tidak boleh sama!',
    ]);
        // dd($request->all());
        Datauser::create($request->all());
        return redirect('/kelola_user')->with('success','Data berhasil ditambahkan');
    }

public function tampildata($id)
{
    $datauser = Datauser::find($id);
    // dd($data);
    return view('kelola_users.edit_user',compact('datauser'));
}

public function updatedata($id, Request $request)
{
      $this->validate($request,[
        'nama' => 'required|min:10|max:20',
        'alamat' => 'required|max:50',
        'telepon' => 'required|min:10|max:13',
    ],[
        'nama.required' => 'Nama Paket tidak boleh kosong!',
        'nama.min' => 'Nama Paket tidak boleh kurang dari 5!',
        'alamat.required' => 'Alamat tidak boleh kosong!',
        'telepon.required' => 'Telepon tidak boleh kosong!',
        'telepon.min' => 'Telepon tidak boleh kurang dari 10!',
        'telepon.max' => 'Telepon tidak boleh lebih dari 13!',
        
    ]);

    $datauser = Datauser::find($id);
    $datauser->update($request->all());

    // dd($data);
     return redirect('/kelola_user')->with('success','Data berhasil diubah');
   }
   public function tambahuser(){
    return view('kelola_users.tambah_paket');
   }
   
}
