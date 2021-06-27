<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->get();
        $products = Product::where('new',0)->get();
        return view('page.trangchu',compact('slide','new_product','products'));
    }
}
