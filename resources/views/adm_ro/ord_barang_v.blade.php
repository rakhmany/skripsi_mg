@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Order</h5>
                <p>Insert your profile details and address</p>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu</span>  / Order Barang
            </div>
        </div>

        <div class="row">
            <div class="col-8 mt-3">
                {{-- <button type="submit" class="btn btn-ungu mb-3 text-white">Tambah Produk</button> --}}
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
                                <label for="" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{produk.nama_produk}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pembeli</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{user.name}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{status.nama_status}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Total Belanja</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{produk.stok}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Terakhir Order</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{order.updated_at}">
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
                <h6 class="mb-1" style="font-weight: bold">Detail Order</h6>
                    <thead class="text-center" style="background: ;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Order</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Total Belanja</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td>2022-06-09 08:21:15</td>
                            <td>Logam Mulia 1 Gram</td>
                            <td>Yudaz A Rakhman</td>
                            <td>Rp. 20.000</td>
                            <td>Order / Cancel by Customer / Cancel by Admin</td>
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

