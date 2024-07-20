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
    
     @if ($message = Session::get('success'))
           <div class="alert alert-secondary" role="alert">
            {{ $message }}
            </div> 
        @endif
         @if ($message = Session::get('danger'))
           <div class="alert alert-danger" role="alert">
            {{ $message }}
            </div> 
        @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                       <div class=" mb-4 position-absolute top-0 end-0 mt-2" style="" >
    <form action="/riwayat_tranksaksi" method="GET">
    <i class="mdi mdi-magnify h-25"></i><input type="search" name="search" id="inputPassword6" class="rounded border border-0 w-75 " style="height: 30px; "  aria-describedby="passwordHelpInline">
    </form>
  </div>
                    <div class="d-flex justify-content-between mt-3">
                    	<h4 class="card-title">Daftar Tranksaksi</h4>
                        <form action="{{ url('/tampiltranksaksi') }}">
                    	<button type="submit" class="btn font-weight-bold btn-sm mb-1 btn-primary" >Tambah data transaksi <span class="btn-icon-right"><i class="fa fa-plus"></i></span></button>
                        </form>
                    </div>
                    <div class="table-responsive">
                       <table class="table table-striped table-bordered border border-danger zero-configuration">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Paket</th>
                                    <th>Tanggal Tranksaksi</th>
                                   
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>berat KG/pcs</th>
                                    <th>Harga</th>
                                    <th>Total seluruh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="font-family: Roboto;">
                                @foreach ($data as $index => $sandy)
                              <?php 
                              $a = $sandy->id_harga;
                              $b = $sandy->kiloan;
                              $total = $a * $b;?>
                                <tr>
                                    <th class="align-middle text-center">{{ $index + $data->firstItem() }}</th>
                                    <th>TR-000{{ $sandy->id }}</th>
                                    <td class="text-center"> {{ $sandy->id_nama }}</td>
                                    <td> {{ $sandy->id_paket }}</td>
                                    <td> {{ $sandy->tgl->translatedFormat('l, d F Y') }}</td>
                                    
                                    <td>{{ $sandy->keterangan }}</td>
                                        <td> {{ $sandy->pembayaran }}</td>
                                    <td class="text-center"> {{ $sandy->kiloan }}</td>
                                    <td>Rp.{{ number_format( $sandy->id_harga )}}</td>
                                    <td>Rp.<?php echo number_format( $total )?></td>
                                   
                                    <td style="text-align: center;">
                                    	<div class="dropdown custom-dropdown">
                                                <a href="/edittranksaksi/{{ $sandy->id }}"> <i class="fa fa-pencil-square-o"></i></a>
                                        </div>&nbsp;&nbsp;&nbsp;
                                           <form action="{{ url('deletetranksaksi/'.$sandy->id) }}" method="get" class="d-inline" onsubmit="return confirm('yakin mau dihapus?')">
                                        @csrf
                                    <button >
                                        <i class="fa fa-trash c-primary" style="font-size: 16px;"></i>
                                    </button>
                                    </form>
                                    </td>
                                </tr>
                                     @endforeach
                            </tbody>
                        </table>
                                {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection
