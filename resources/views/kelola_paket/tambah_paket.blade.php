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
                    	<h2 class="card-title">Tambah Paket</h2>
                    </div>
                    <form action="/insertpaket" method="POST" >
            @csrf
        <div class="form-group" style="border-radius: 10px">
            <label for="">Nama</label>
            <input type="text" name="nama_paket" class="form-control input-group-sm" style="border-radius: 8px" value="{{ old('nama_paket') }}">
                 @error('nama_paket')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
       
         <div class="form-group">
            <label for="">Jenis</label>
    <select class="form-select " aria-label=".form-select-sm example" name="jenis">
       
  <option value="kiloan">kiloan</option>
  <option value="satuan">satuan</option>
 
</select>

</select>
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" class="form-control" style="border-radius: 8px" value="{{ old('harga') }}">
                 @error('harga')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection