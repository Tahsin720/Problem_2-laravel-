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
    public function add_variant(){
        return view("auth.add_variant");
    }
    public function addItemvariant(Request $request){
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
    public function registration3(){
        return view("auth.Registration");
    }
    public function registerUser_3(Request $request){
        $variant_3 = new variant_3();
        $variant_3->variant_3_name = $request->variant_3;
        $variant_3->city = $request->city;
        $variant_3->country = $request->country;
        $variant_3->email = $request->email;
        // $variant_3->password = Hash::make($request->password);
        $variant_3->password = $request->password;
        $variant_3->date_of_birth = $request->date_of_birth;
        $variant_3->status = $request->status;
        $res = $variant_3 -> save();
        if($res){
            back()->with('success', 'You have registered successfully!');
            return redirect('/');
        }
        else{
            return back()->with('fail', 'Something Worng!');
        }
    }
    public function registration2(){
        return view("auth.Registration_2");
    }
    public function registerUser_2(Request $request){
        $variant_3 = new variant_2();
        $variant_3->variant_3_name = $request->variant_3;
        $variant_3->city = $request->city;
        $variant_3->country = $request->country;
        $variant_3->email = $request->email;
        // $variant_3->password = Hash::make($request->password);
        $variant_3->password = $request->password;
        $variant_3->date_of_birth = $request->date_of_birth;
        $variant_3->status = $request->status;
        $res = $variant_3 -> save();
        if($res){
            back()->with('success', 'You have registered successfully!');
            return redirect('/');
        }
        else{
            return back()->with('fail', 'Something Worng!');
        }
    }
    
}
