@extends('template')
@section('css')

@section('konten')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('/kelola_pengguna') }}">Kelola Pengguna</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal fade" id="lihatModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                    	<h2 class="card-title">EDIT USER</h2>
                    	
                    </div>
                   <form action="/updatedata/{{ $datauser->id }}" method="POST">
                    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama"  style="border-radius: 8px" value="{{old('nama', $datauser->nama) }}">
     @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat"    style="border-radius: 8px" value="{{ old('alamat', $datauser->alamat )}}">
     @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
     <div class="form-group">
            <label for="">Jenis Kelamin</label>
    <select class="form-select " aria-label=".form-select-sm example" name="jenis_kelamin" >
  <option selected>Jenis Kelamin</option>
  <option value="laki_laki" >Laki Laki</option>
  <option value="perempuan">Perempuan</option>
 
</select>

</select>
        </div>
  <div class="mb-3">
    <label for="" class="form-label">Telepon</label>
    <input type="text" class="form-control"  name="telepon"   style="border-radius: 8px" value="{{ old('telepon', $datauser->telepon) }}">
     @error('telepon')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/kelola_user" class="btn btn-danger">Kembali</a>
</form> 
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection