@extends('layouts.main')

@section('content')
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                /* font-weight: 400; */
            }

            h1,{
                font-family: 'Poppins', sans-serif;
                font-weight: 100;
            }
            h2{
                font-family: 'Poppins', sans-serif;
                font-weight: 800;
            }
        </style>
    </head>

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
                <form>
                    <div class="border-bottom pb-1">
                        <h5 class="mb-1" style="font-weight: bold">Data Personal</h5>
                        <p>Insert your profile details and address</p>
                    </div>
                    <div class="row border-bottom pb-1">
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
                                    <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-3 border-bottom mb-3">
                        <h6 class="mb-1" style="font-weight: bold">Email</h6>
                    </div>
                    {{-- <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>

    
    
    
@endsection

