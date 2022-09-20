<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;



class ProductsController extends Controller
{
   public function index()
   {
    $products = Products::all();
    return view('products.index',['products'=>$products]);
   }

   public function show()
   {
      $products = Products::all();
      return response()->json(['products'=> $products]);
   }

}
