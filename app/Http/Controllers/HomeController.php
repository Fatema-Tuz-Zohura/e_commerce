<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
  public function showWelcome(){

    	$data= [];
    	$data['hero'] = true;
    	$data['date'] = date('d-m-Y');
    	$data['products'] = Product::select(['id','name','slug','sales_price'])->get();
    		
    	

    	return view('welcome',$data);
    }
}
