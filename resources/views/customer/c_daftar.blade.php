@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="border-bottom pb-1">
                <h2 class="mb-1">Daftar Reseller</h2>
                <p>Insert your profile details and address</p>
            </div>
            <div class="col-2 mt-3">
                <h5>My Details</h5>
            </div>
            <div class="col-10 mt-3">
                {{-- reference bootstrap
                                https://getbootstrap.com/docs/5.2/forms/overview/#form-text --}}
                <form action="" method="">
                    <div class=" pb-1">
                        <h5 class="mb-1" style="font-weight: bold">Data Personal</h5>
                        <p>Insert your profile details and address</p>
                    </div>
                    <hr>
                    <div class="row pb-1">
                        <div class="col-3 mt-3">
                            <h6 class="mb-1" style="font-weight: bold">Data Personal</h6>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
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
                                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan tempat lahir">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan tanggal lahir anda">
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
                                <input type="text" class="form-control" placeholder="Masukkan alamat email" aria-label="Username" aria-describedby="basic-addon1">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                            </div> 
                        </div>
                        <hr>
                        <div class="col-3 mt-3">
                            <h6 class="mb-1" style="font-weight: bold">Alamat Rumah</h6>
                        </div>
                        <div class="col-9 mt-3">
                            <div class="mb-3">
                                <textarea name="alamat-rumah" id="" cols="50" rows="10" placeholder="Masukkan alamat lenglap" class="form-control"></textarea>
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

                    <!-- Modal Success -->
                    <div class="modal fade text-center" id="modalBerhasil" tabindex="-1" aria-labelledby="modalBerhasilLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <span><i class="fa-regular fa-envelope"></i></i></span>
                                <h1>Berhasil</h1>
                                <p>Terima kasih telah mendaftar</p>
                            </div>
                            <div class="modal-footer align-items-center">
                            <button type="button" class="btn btn-primary">Back to Login </button>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>

    
    
    
@endsection

