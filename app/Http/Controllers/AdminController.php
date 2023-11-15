<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\order;
use App\Models\products;
use App\Models\categories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

 
   
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
            return redirect("/admin/serviceRedact")->with("success","");
        }
    }
        public function ordersNew(){
            $orders = order::where('id_status',1)->paginate(10);
        return view('admin.ordersNew', compact('orders'));
    }
        public function ordersDeny(){
            $orders = order::where('id_status',2)->paginate(10);
        return view('admin.ordersDeny', compact('orders'));
    }
        public function ordersSub(){
            $orders = order::crossJoin('status'->crossJoin('users'->crossJoin('baskets'->crossJoin('payments'->select('*')->where('orders.id_status','status.id')->where('orders.basket_id','baskets.id')->where('baskets.user_id','users.id')->where('orders.id_type','payments.id')->where('id_status',3)))))->paginate(10);

        return view('admin.ordersSub', compact('orders'));
    }
        public function serviceRedact(){
            $categoria= categories::all();  
        return view('admin.serviceRedact',["categories" => $categoria]);
    }     
}
