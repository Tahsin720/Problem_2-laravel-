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
        $variant_3->gender = $request->gender;
        $variant_3->color = $request->color;
        $variant_3->size = $request->size;
        $variant_3->price = $request->price;
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
        $variant_2 = new variant_2();
        $variant_2->color = $request->color;
        $variant_2->size = $request->size;
        $variant_2->price = $request->price;
        $res = $variant_2 -> save();
        if($res){
            back()->with('success', 'You have registered successfully!');
            return redirect('/');
        }
        else{
            return back()->with('fail', 'Something Worng!');
        }
    }

    public function editpage3(Request $request){
        $item = variant_3::where('id', '=', $request->id)->first();
        return view("auth.edit_3", ['items' => $item]);
    }
    
    public function edit3func(Request $request){ 
        variant_3::where('id', '=', $request->id)->update([
                                                        "gender" => $request->gender,
                                                        "color" => $request->color, 
                                                        "size" => $request->size,
                                                        "price" => $request->price
                                                    ]);
        return redirect('/');
    }

    public function edit2func(Request $request){ 
        variant_2::where('id', '=', $request->id)->update([
                                                            "color" => $request->color, 
                                                            "size" => $request->size,
                                                            "price" => $request->price
                                                        ]);
        return redirect('/');
    }

    public function editpage2(Request $request){
        $item = variant_2::where('id', '=', $request->id)->first();
        return view("auth.edit_2", ['items' => $item]);
    }

    public function delete3func(Request $request){
        $user = variant_3::where('id', '=', $request->id)->first();
        $user->delete();
        return redirect('/');
    }
    public function delete2func(Request $request){
        $user = variant_2::where('id', '=', $request->id)->first();
        $user->delete();
        return redirect('/');
    }
}
