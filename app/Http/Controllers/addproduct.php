<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class addproduct extends Controller
{
    public function addproduct(){
        $products=Product::all();

        return view('addproduct',compact('products'));

    }


    public function manageproduct(){

        $products=Product::all();
        return view('manageproduct',compact('products'));

    }

    public function store(Request $request){
        //dd($request->all());

         $request->validate([
             'name'=>'required',
             'price'=>'required|numeric',
             'quantity'=>'required|numeric',


         ]);
        Product::create([
            // name for db field || name for form fields
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,


        ]);
        return redirect()->route('addproduct')->with('message','Product create successfully');
    }


    public function productedit($id)

    {

        $products=Product::find($id);
         //dd($customers->all());

        return view('manageproduct',compact('products'));

    }
    public function productdelete($id)
    {

        $product=Product::find($id);
        // dd($customer);
        if ($product){
            $product->delete();
            return redirect()->back()->with('message','Product is Deleted');

        }
        return redirect()->back()->with('message','Product is not Deleted');
    }
    public function productupdate (Request $request, $id)
    {
        // dd($request->all());

        $products=Product::find($id);


        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric|integer',
            'quantity'=>'required|numeric|integer|min:1',


        ]);


        $products->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,


        ]);

        return redirect()->route('addproduct')->with('message','Product Information is Updated');

    }

}
