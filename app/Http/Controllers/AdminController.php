<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\products;
use App\Models\categories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

    public function index () {
        $categoria= categories::all();  
        return view('admin.index',["categories" => $categoria]);
    }
   
    public function addproduct (Request $request) {
        $addproduct= $request->all();

        $file = $request ->file("img");
        $file_name = md5($file->getClientOriginalName().time()). "." .$file->getClientOriginalExtension();
        Storage::putFileAs("public/img",$file,$file_name);
     $product=products::create([
            "title"  => $addproduct["title"],
            "description" =>$addproduct["description"],
            "cost" =>$addproduct["cost"],
            "img"=>$file_name,
            "categoru_id"=>$addproduct["categoru_id"]

        ]);
        if ($product) {
            return redirect("/")->with("success","");
        }

    }

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
