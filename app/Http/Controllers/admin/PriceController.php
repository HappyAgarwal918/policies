<?php
  
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\price;

class PriceController extends Controller
{

     public function index()
    {
        if(auth()->user()->admin == 1){

            $price = price::orderBy('id', 'asc')->get();

            return view('admin.Price.Price',compact('price'));
        }
    }

    public function edit($id)
    {
        $price = price::where('id', $id)->first();

    	return view('admin.Price.EditPrice',compact('id','price'));
    }

    public function editPrice(Request $req)
    {
        $id = $req -> id;

    	$price = price::where('id', $id)->first();
    	$price -> price = $req -> price;
        $price -> deal_price = $req -> deal_price;

    	$price -> save();

    	return redirect('price')->with('successful_message','Price Changed Successfully');
    }

}