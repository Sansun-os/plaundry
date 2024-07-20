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
    <form action="/kelola_paket" method="GET">
    <i class="mdi mdi-magnify h-25"></i><input type="search" name="search" id="inputPassword6" class="rounded border border-0 w-75 " style="height: 30px; "  aria-describedby="passwordHelpInline">
    </form>
  </div>
            <div class="d-flex justify-content-between mt-3">
            <h4 class="card-title">Daftar Paket</h4>
            <form action="{{ url('/tambahpaket') }}">
        	<button type="submit" class="btn font-weight-bold btn-sm btn-primary mb-2" >
  Tambah User<span class="btn-icon-right"><i class="fa fa-plus"></i></span>
</button>
</form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered border border-danger zero-configuration">
                            <thead style="text-align: center;">
                                <tr>        
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $index => $sandy )
                                <tr class="" style="color: rgb(0, 0, 0);">
                                    <th class=" text-center">{{ $index + $data->firstItem() }}</th>
                                    <th class=" text-center">{{ $sandy->nama_paket }}</th>
                                    <td class=" text-center">{{ $sandy->jenis }}</td>
                                    <td class=" text-center">Rp.{{number_format( $sandy->harga) }}</td>
                                    <td style="text-align: center;">
                                    <div class="dropdown custom-dropdown">
                                    <a href="/tampildatapaket/{{ $sandy->id }}"> <i class="fa fa-pencil-square-o"></i></a>
                                        </div>&nbsp;&nbsp;&nbsp;
                                         <form action="{{ url('deletepaket/'.$sandy->id) }}" method="get" class="d-inline" onsubmit="return confirm('yakin mau dihapus?')">
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
