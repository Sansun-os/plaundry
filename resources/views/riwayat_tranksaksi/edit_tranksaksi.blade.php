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
                    <h1 class="card-title mb-4 align-center" style="text-align: center;">Edit Detail Tranksaksi</h1>
                    <div class="form-validation">
                         <form action="/updatetranksaksi/{{ $data->id }}" method="POST" >
            @csrf
<div class="rounded" style="background-color: #E9ECEF; height:auto; width:100%;">
    <div style="" class="p-2">
 <label>Kode Invoice  : {{'TR-000'. $data->id   }}</label>
 <br>
    <label>Nama User  : {{$data->id_nama }}</label>
    <br>
    <label>Nama Paket : {{$data->id_paket }} </label>
    <br>
   <label>Berat satuan/kiloan Paket : {{$data->kiloan .'KG'}} </label>
    <br>
   
        <label>Tanggal    : {{$data->tgl->translatedFormat('l, d F Y') }} </label>
        <br>
    <label>Keterangan : {{$data->keterangan }}</label>
    <br>
    <label>Jumlah Pakaian    : {{ $data->jumlah  }}</label>
</div>
</div>
<br>
       <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
            <label for="">name</label>
      <select class="form-select " aria-label=".form-select-sm example" name="id_nama" >

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
            <input type="number" name="kiloan" class="form-control" style="border-radius: 8px" value="{{old('kiloan', $data->kiloan ) }}">
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
            <input type="date" name="tgl" class="form-control" style="border-radius: 8px" value="{{ $data->tgl->translatedFormat('l, d F Y') }}" >
             @error('tgl')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>

            </div>
            	<div class="col-md-6">
        			<div class="form-group">
        				<label>Keterangan</label>
        					<select class="form-select " aria-label=".form-select-sm example" name="keterangan">
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
            <input type="text" name="jumlah" class="form-control" style="border-radius: 8px" value="{{old('jumlah', $data->jumlah ) }}" >
             @error('jumlah')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
            </div>
                          <div class="col-md-6">
 <div class="form-group">
            <label for="">Pembayaran</label>
           			<select class="form-select " aria-label=".form-select-sm example" name="pembayaran">
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