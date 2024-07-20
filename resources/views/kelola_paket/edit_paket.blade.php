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
                    	<h2 class="card-title">EDIT PAKET</h2>
                    	
                    </div>
                   <form action="/updatepaket/{{ $data->id }}" method="POST">
                    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nama Paket</label>
    <input type="text" class="form-control" name="nama_paket"  style="border-radius: 8px"  value="{{old('nama_paket', $data->nama_paket) }}">
   @error('nama_paket')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
     <div class="form-group">
            <label for="">Jenis Paket</label>
    <select class="form-select " aria-label=".form-select-sm example" name="jenis " >
  <option selected>Pilih jenis paket</option>
  <option value="kiloan" >kiloan</option>
  <option value="satuan" >satuan</option>
 
</select>

</select>
        </div>
  <div class="mb-3">
    <label for="" class="form-label">Harga</label>

    <input type="text" class="form-control"  name="harga"   style="border-radius: 8px" value="{{old('harga', $data->harga ) }}">
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