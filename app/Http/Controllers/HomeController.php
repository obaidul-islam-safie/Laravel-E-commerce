<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $product=Product::paginate(10);
        return view('home.userpage', compact('product'));
    }

   public function redirect(){
    $usertype=Auth::user()->usertype;
    if($usertype=='1'){
        return view('admin.home');
    }else{
        $product=Product::paginate(10);
        return view('home.userpage', compact('product'));
    }

   }
}
