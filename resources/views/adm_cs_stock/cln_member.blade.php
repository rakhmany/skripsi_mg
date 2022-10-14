@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Calon Member</h5>
                <p>Insert your profile details and address</p>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu</span>  / Calon Member
            </div>
        </div>
            
        <div class="row">
            <div class="col-8 mt-3">
                {{-- <button type="submit" class="btn btn-ungu mb-3 text-white">Tambah Data</button> --}}
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
                {{-- <h6 class="mb-1" style="font-weight: bold">Detail Order</h6> --}}
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
    </div>

    
    
    
@endsection

