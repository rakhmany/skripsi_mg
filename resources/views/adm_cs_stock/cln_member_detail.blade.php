@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Calon Member</h5>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu / Calon Member</span> / Detail calon member  
            </div>
        </div>
            
        <div class="row">
            <div class="col-8 mt-3">
                <button type="submit" class="btn btn-ungu mb-3 text-white"><i class="fa-solid fa-angle-left p-1"></i>Tambah Data</button>
            </div>
        </div>
        
        <div class="row">
            <div class=" col-12 pt-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-8">
                            <div class="row kotak p-2">
                                <h5 class="mb-1" style="font-weight: bold">Data Personal</h5>
                                <p>Update your profile details and address</p>
                                <hr>
                                <div class="row pb-1">
                                    <div class="col-3 mt-3">
                                        <h6 class="mb-1" style="font-weight: bold">Data Sistem</h6>
                                    </div>
                                    <div class="col-9 mt-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal daftar akun</label>
                                            <input type="date" class="form-control" id="" placeholder="Masukkan tempat lahir">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-3 mt-3">
                                        <h6 class="mb-1" style="font-weight: bold">Data Personal</h6>
                                    </div>
                                    <div class="col-9 mt-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama Customer</label>
                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{nama}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nomor KTP</label>
                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{no_ktp}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Jenis Kelamin</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">-- Pilih jenis kelamin --</option>
                                                <option value="">Laki - laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <label for="" class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="" placeholder="{tmpt_lhr}">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <label for="" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="" placeholder="{tgl_lhr}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-3 mt-3">
                                        <h6 class="mb-1" style="font-weight: bold">Email</h6>
                                        <p>Informasi akan dikirimkan melalui alamat email yang tertera</p>
                                    </div>
                                    <div class="col-9 mt-3">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="{email}" aria-label="Username" aria-describedby="basic-addon1">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                                        </div> 
                                    </div>
                                    <hr>
                                    <div class="col-3 mt-3">
                                        <h6 class="mb-1" style="font-weight: bold">Alamat Rumah</h6>
                                    </div>
                                    <div class="col-9 mt-3">
                                        <div class="mb-3">
                                            <textarea name="alamat-rumah" id="" cols="50" rows="10" placeholder="{alamat}" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <select name="" id="" class="form-select">
                                                <option value="">-- Pilih provinsi --</option>
                                                <option value="">nama provinsi</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-dark float-right w-50" data-bs-toggle="modal" data-bs-target="#modalBerhasil">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="kotak p-2">
                                <div class="mb-3 bg">
                                    <label for="" class="form-label">Verifikasi Status</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        <option value="">Aktif</option>
                                        <option value="">Belum Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Member</label>
                                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan Nomor Member">
                                </div>
                                <div class="align-items-center">
                                    <button type="button" class="btn btn-primary">Back to Login </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    
    
@endsection

