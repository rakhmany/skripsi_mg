<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class adm_CalonMemberController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     public function index(){

          return view('adm_cs_stock/cln_member');

     }

     public function view(){

          return view('adm_cs_stock/cln_member_detail');

     }

}
