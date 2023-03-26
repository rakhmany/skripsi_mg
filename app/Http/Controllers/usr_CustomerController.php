<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class usr_CustomerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     public function profile_index(){

          return view('customer/c_profile');

     }

     public function order_index(){

          return view('customer/c_order');

     }
}
