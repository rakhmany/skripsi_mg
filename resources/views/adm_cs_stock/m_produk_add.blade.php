@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-9 pt-3">
                <h5 class="mb-1" style="font-weight: bold">Tambah Produk</h5>
            </div>
            <div class="col-3 pt-3 text-end">
                <span style="color: #526EFF">Menu / Manage Product</span> / Tambah Produk  
            </div>
        </div>
        
        <div class="row">
            <div class=" col-12 pt-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-12">
                            <div class="row kotak p-2">
                                <div class="row pb-1">
                                    <div class="col-6 mt-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="" placeholder="Masukkan nama produk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" id="" placeholder="-- Pilih Kategori --">

                                            {{-- <select name="" id="" class="form-select">
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="">-</option>
                                                <option value="">-</option>
                                            </select> --}}
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Status</label>
                                            <input type="text" class="form-control" id="" placeholder="-- Pilih Status --">

                                            {{-- <select name="" id="" class="form-select">
                                                <option value="">-- Status --</option>
                                                <option value="">-</option>
                                                <option value="">-</option>
                                            </select> --}}
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 mt-3">
                                        <label for="" class="form-label">Stok</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Masukkan stok" aria-label="Username" aria-describedby="basic-addon1">
                                            <span class="input-group-text" id="basic-addon1">pcs</span>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="" class="form-label">Terakhir Diubah</label>
                                            <input type="text" class="form-control" id="" placeholder="{produk.updated_at}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#modalBerhasil"><i class="fa-solid fa-floppy-disk p-1"></i>Tambah Produk</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    
    
@endsection

