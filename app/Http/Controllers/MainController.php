<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{

    public function index()
    {
    	$category_products = DB::table('category_products')->get();
    	$list_products_top = DB::table('list_products')->where('top', 1)->get();
        return view('index', ['list_products_top'=>$list_products_top,
        	                  'category_products'=>$category_products]);
    }

}
