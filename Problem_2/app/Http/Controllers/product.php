<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_list;
use App\Models\variant_2;
use App\Models\variant_3;
class product extends Controller
{
    public function product_list(){
        $info = product_list::all();
        return view("auth.product_list", ['info' => $info]);
    }
    public function add_product(){
        return view("auth.add_product");
    }
    public function addItem(Request $request){
        $product = new product_list();
        $product->product_name = $request->name;
        $product->variant = $request->variant;
        $pro = $product -> save();
        if($pro){
            back()->with('success', 'You have registered successfully!');
            return redirect('/');
        }
        else{
            return back()->with('fail', 'Something Worng!');
        }
    }    
    public function viewTable(Request $request){
        $variant = $request->id;
        if($variant == 2){
            $info = variant_2::all();
            return view("auth.product_table2", ['info' => $info]);
        }
        else{
            $info = variant_3::all();
            return view("auth.product_table3", ['info' => $info]);
        }
        
    }
    
    
}
