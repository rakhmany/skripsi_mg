@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Data Order</h5>
                <p>Insert your profile details and address</p>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu</span>  / Order
            </div>
        </div>
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
            <div class="col-12 pt-3">
                <table class="table" style="border: 10px;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Order</th>
                        <th scope="col">Tanggal Order</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">No. Member</th>
                        <th scope="col">Total Transaksi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status Pemesanan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <th scope="row">1</th>
                        <td>{ order_detail.order_id }</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp. 120.000</td>
                        <td>Bayar</td>
                        <td>Sedang diproses / Dalam Pengiriman / Sosial</td>
                        <td>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-pen-to-square"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>{ order_detail.order_id }</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp. 120.000</td>
                        <td>Bayar</td>
                        <td>Sedang diproses / Dalam Pengiriman / Sosial</td>
                        <td>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-ungu text-white m-1"><i class="fa-solid fa-pen-to-square"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>{ order_detail.order_id }</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp. 120.000</td>
                        <td>Bayar</td>
                        <td>Sedang diproses / Dalam Pengiriman / Sosial</td>
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

