<?php

namespace App\Http\Controllers\thang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThangController extends Controller
{
    //
    public function index() {
        return view('thang');
    }
    public function Create(){
        return view('showKH');
    }
    public function Show($id){
        if($id == 1){
        return view('editKH');
        }
    }
}
