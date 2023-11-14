<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ordersDeny(){
        return view('admin.ordersDeny');
    }
        public function ordersNew(){
        return view('admin.ordersNew');
    }
        public function ordersProg(){
        return view('admin.ordersProg');
    }
        public function ordersSub(){
        return view('admin.ordersSub');
    }
        public function serviceRedact(){
        return view('admin.serviceRedact');
    }
        public function userRedact(){
        return view('admin.userRedact');
    }
}
