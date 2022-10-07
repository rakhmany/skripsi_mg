@extends('layouts.main')

@section('content')

    <div class="container-fluid content-main" id="content-main">
        <div class="row pt-3">
            <div class="col-10">
                <h5 class="mb-1" style="font-weight: bold">Data Order</h5>
                <p>Insert your profile details and address</p>
            </div>
            <div class="col-2 pt-3 text-end">
                <span style="color: #526EFF">Menu</span>  / Order / View
            </div>
        </div>
        
        <div class="row">
            <div class=" col-12 pt-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Customer</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{user.name}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nomor Member</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{customer.member.id}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Order</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{order_detail.order_id}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{status.bayar}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status Pemesanan</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{pemesanan}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Total Transaksi</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="{harga}">
                            </div>
                        </div>
                    </div>
                </form>

                <table class="table" style="border: 10px;">
                <h6 class="mb-1" style="font-weight: bold">Detail Order</h6>
                    <thead class="text-center" style="background: ;">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga / Unit</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
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
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>{ order_detail.order_id }</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp. 120.000</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>{ order_detail.order_id }</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp. 120.000</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    
    
    
@endsection

