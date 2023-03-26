@extends('layouts.main_admin')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin CS</a></li>
    <li class="breadcrumb-item active">Calon Member</li>
@endsection

@section('title')
    Calon Member
@endsection

@section('content')

<div class="card-header">
    <h4 class="card-title">Calon member</h4>
    <p class="card-title-desc">DataTables has most features enabled by
        default, so all you need to do to use it with your own tables is to call
        the construction function: <code>$().DataTable();</code>.
    </p>
</div>

<div class="card-body">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Jenis Kelamin</th>
                <th>No Handphone (WhatsApp)</th>
                <th>Email</th>
                <th>Tanggal Dibuat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Yudaz A Rakhman</td>
                <td>Laki - Laki</td>
                <td>0878</td>
                <td>yudazauliarakhman23@gmail.com</td>
                <td>2011-04-25</td>
                <td>Belum Aktif</td>
                <td>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-warning waves-effect waves-light btn-sm">
                        <i class="mdi mdi-eye d-block font-size-16"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-success waves-effect waves-light btn-sm">
                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

</div>


{{-- LAMA --}}
    {{-- <div class="container-fluid content-main" id="content-main">
        
            
        <div class="row">
            <div class="col-8 mt-3">
                <button type="submit" class="btn btn-ungu mb-3 text-white">Tambah Data</button>
            </div>
            <div class="col-4 text-end mt-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-ungu contoh2" placeholder="Masukkan alamat email" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div> 
            </div>
        </div>
        
         <div class="row">
            <div class=" col-12 pt-3">
                <table class="table" style="border: 10px;">
                <h6 class="mb-1" style="font-weight: bold">Detail Order</h6>
                    <thead class="text-center" style="background: ;">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No. Handphone(WhatsApp)</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <th scope="row">1</th>
                        <td>Yudaz A Rakhman</td>
                        <td>Laki-laki</td>
                        <td>087820189150</td>
                        <td>yudazauliarakhman23@gmail.com</td>
                        <td>2022-06-09 08:21:15</td>
                        <td>Belum Aktif</td>
                        <td>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-pen-to-square"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Desi E Pratiwi</td>
                        <td>Perempuan</td>
                        <td>087820189150</td>
                        <td>desiepratiwi@gmail.com</td>
                        <td>2022-06-09 08:21:15</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-pen-to-square"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div> 


    </div> --}}
{{-- LAMA --}}
    
    
@endsection

