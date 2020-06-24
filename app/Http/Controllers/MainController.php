<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{

    public function index($caregory_id=Null)
    {
    	if($caregory_id):
    		$list_products_top = DB::table('list_products')->where('category_id', $caregory_id)->limit(12)->get();
    	else:
    		$list_products_top = DB::table('list_products')->where('top', 1)->get();
    	endif;
    	$category_products = DB::table('category_products')->get();
    	
        return view('index', ['list_products_top'=>$list_products_top,
        	                  'category_products'=>$category_products]);
    }

}
