@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Order Pengiriman</h5>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu / Pengiriman</span>  / View
            </div>
        </div>

        <div class="row">
            <div class="col-8 mt-3">
                <button type="submit" class="btn btn-ungu mb-3 text-white">Tambah Pengiriman</button>
            </div>
            <div class="col-4 text-end mt-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-ungu contoh2" placeholder="Pencarian" aria-label="Perncarian" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div> 
            </div>
        </div>
        
        <div class="row">
            <div class=" col-12 pt-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">No Pengiriman</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan nama pengiriman">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pengiriman</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{user.name}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{status.nama_status}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Driver</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan nama driver">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan tanggal pengiriman">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Close</label>
                                <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan tanggal close">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Terakhir Order</label>
                                <input type="text" name="Phone Number" pattern="[0]{1}[0-9]{9}" title="10 digit phone number with 7-9 at the beginning" required>
                            </div> 
                            <div class="mb-3">
                                <input value="submit" type="submit" class="button" id="button">
                            </div>--}}
                            
                        </div>
                    </div>
                </form>

                <table class="table" style="border: 10px;">
                    <thead class="text-center" style="background: ;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Pengiriman</th>
                            <th scope="col">Tanggal Pengiriman</th>
                            <th scope="col">Nama Driver</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">Tanggal Close</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td>{pengiriman.no_pengiriman}</td>
                            <td>{pengiriman.tgl_pengiriman}</td>
                            <td>Yudaz A Rakhman</td>
                            <td>{users.name}</td>
                            <td>pengiriman.tgl_close</td>
                            <td>Proses / Proses Kirim / Close Order</td>
                            <td>
                                <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-warning text-white m-1"><i class="fa-solid fa-pen-to-square"></i></button>
                            </td>
                          </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    
    
    
@endsection

