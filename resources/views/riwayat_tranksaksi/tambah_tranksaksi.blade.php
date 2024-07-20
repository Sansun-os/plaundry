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
                    <h2 class="card-title mb-4 align-center" style="text-align: center;">Tambah Tranksaksi</h2>
                       <form action="/tambahtranksaksi" method="POST" >
            @csrf

                       
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Paket Kiloan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 
                  
          
 
                    <div class="form-validation">
                      
   
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
            <label for="">name</label>
      <select class="form-select " aria-label=".form-select-sm example" name="id_nama" >
  <option selected> --pilih nama user--</option>
  @foreach ($datauser as $usersandy )
 <option value="{{ $usersandy->nama }}">{{ $usersandy->nama }}</option>
  @endforeach
      @error('id_nama')
    <div class="text-danger">{{ $message }}</div>
@enderror

  
</select>
        </div>

            </div>
            <div class="col-md-6">
 <div class="form-group">
            <label for="">Harga</label>
              <select class="form-select " aria-label=".form-select-sm example" name="id_harga" >
  <option selected> --pilih harga paket--</option>
  @foreach ($datapaket as $hargasandy )
 <option value="{{ $hargasandy->harga }}">Rp.{{$hargasandy->harga  }}</option>
  @endforeach
      @error('harga')
    <div class="text-danger">{{ $message }}</div>
@enderror

  
</select
             @error('')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                      <div class="form-group">
            <label for="">Paket</label>
    <select class="form-select " aria-label=".form-select-sm example" name="id_paket" >
  <option selected style="fs-6"><h3>--Pilih paket--</h3> </option>
 @foreach ($datapaket as $paketsandy )
 <option value="{{ $paketsandy->nama_paket }}">{{ $paketsandy->nama_paket }}</option>
  @endforeach>
</select>
     @error('id_paket')
    <div class="text-danger">{{ $message }}</div>
@enderror

     
 
       
        </div>
        </div>
   <div class="col-md-6">
    <div class="form-group">
            <label for="">Berat KG</label>
            <input type="number" name="kiloan" class="form-control" style="border-radius: 8px" value="">
             @error('kiloan')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
   </div>
    
            
        </div>
        <div class="row">
     
            <div class="col-md-6">
<div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" name="tgl" class="form-control" style="border-radius: 8px" value="" >
             @error('tgl')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>

            </div>
            	<div class="col-md-6">
        			<div class="form-group">
        				<label>Keterangan</label>
        					<select class="form-select " aria-label=".form-select-sm example" name="keterangan">
  <option selected>--pilih Status--</option>
  <option value="proses">Proses</option>
  <option value="diambil">Diambil</option>
</select>
     @error('keterangan')
    <div class="text-danger">{{ $message }}</div>
@enderror

        			</div>
        		</div>
        </div>
  
         
         <div class="row">
        	
        	
        	</div>
            <div class="row">
                          <div class="col-md-6">
 <div class="form-group">
            <label for="">Jumlah Pakaian</label>
            <input type="text" name="jumlah" class="form-control" style="border-radius: 8px" value="" >
             @error('jumlah')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
            </div>
                          <div class="col-md-6">
 <div class="form-group">
            <label for="">Pembayaran</label>
           			<select class="form-select " aria-label=".form-select-sm example" name="pembayaran">
  <option selected> <i>--pilih Pembayaran--</i> </option>
  <option value="belum_dibayar">Belum dibayar</option>
  <option value="sudah_dibayar">Sudah dibayar</option>
</select>	
             @error('pembayaran')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
            </div>
            </div>
  
        
                            <div class="form-group row">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/riwayat_tranksaksi" class="btn btn-danger">Kembali</a>
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