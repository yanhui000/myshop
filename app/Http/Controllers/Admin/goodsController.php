<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class goodsController extends Controller
{
    public function add_goods(){
        return view('Admin/add_goods');
    }

    public function do_add_goods(Request $request){
        $path = $request->file('goods_file')->store('goods');
        echo asset('storage'.'/'.$path);
    }
}
