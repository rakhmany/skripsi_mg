@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Stock Product</h5>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu</span>  / Stock Product
            </div>
        </div>
            
        <div class="row">
            <div class="col-8 mt-3">
                <button type="submit" class="btn btn-ungu mb-3 text-white">Tambah Produk</button>
            </div>
            <div class="col-4 text-end mt-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-ungu contoh2" placeholder="Pencarian" aria-label="Username" aria-describedby="basic-addon1">
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
                        <th scope="col">Id Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pembuatan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <th scope="row">1</th>
                        <td>{produk.id}</td>
                        <td>Logam Mulia 1 Gram</td>
                        <td>Gold</td>
                        <td>5</td>
                        <td>Rp. 20.000</td>
                        <td>2022-06-09 08:21:15</td>
                        <td>Aktif / Tidak Aktif</td>
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

