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
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    	<h4 class="card-title">Data Laporan</h4>
                    	
                   
                    </div>
                    <div class="row">
       <div class="col-md-6">
        <div class="form-group">
            <form action="/laporan" method="GET">
            <label for="">Dari Tanggal</label>
            
            <input type="date" name="tgl" id="date" class="form-control mb-2" style="border-radius: 8px" value="" >
             <label for="" class="mt-2">Sampai Tanggal</label>
            <input type="date" name="tgl" id="date" class="form-control mb-2" style="border-radius: 8px" value="" >
            <button type="submit" name="search" class="btn btn-primary d-flex" size="50">submit</button>
            </form>
            <a href="/exportpdf" class="btn btn-danger" >Export PDF</a>
             @error('')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
                    </div>
                    </div>
   
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Paket</th>
                                    <th>Harga</th>
                                    
                                    <th>Pendapatan</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($data as $index => $sandy)
                                 <?php 
                                  $a = $sandy->id_harga;
                              $b = $sandy->kiloan;
                              $total = $a * $b;
                              ?>
                                 
                                 
                                <tr>
                                    <th class="align-middle text-center">
                                       {{ $index + $data->firstItem() }}
                                    </th>
                                    <th class="align-middle text-center">{{ $sandy->tgl->translatedFormat('l, d F Y') }}</th>
                                    <td class="text-center">{{ $sandy->id_paket }}</td>
                                    <td class="text-center">Rp.{{number_format( $sandy->id_harga )}}</td>
                                    <td class="text-center">Rp.<?php echo number_format( $total )?></td>
                                    
                                </tr>
                              
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




  
</div>
@endsection
