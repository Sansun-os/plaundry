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
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 s">User Baru</h4>
                    <div class="form-validation">
                         <form action="/insertdata" method="POST" >
            @csrf
        <div class="form-group" style="border-radius: 10px">
                <label class="" for="">Nama</label>
            <input type="text" name="nama" class="form-control input-group-sm" style="border-radius: 8px" value="{{ old('nama') }}" >
            @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
         <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" style="border-radius: 8px" value="{{ old('alamat') }}">
             @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
         <div class="form-group">
            <label for="">Jenis Kelamin</label>
    <select class="form-select " aria-label=".form-select-sm example" name="jenis_kelamin">
   <option selected>--pilih jenis kelamin--</option>
  <option value="laki_laki">Laki Laki</option>
  <option value="perempuan">Perempuan</option>
    
</select>
  @error('jenis_kelamin')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
        </div>
         <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telepon" class="form-control" style="border-radius: 8px" value="{{ old('telepon') }}" >
             @error('telepon')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
                            <div class="form-group row">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/kelola_user" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection