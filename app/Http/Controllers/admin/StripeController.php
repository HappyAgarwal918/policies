<?php
  
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\stripe;
use DB;

class StripeController extends Controller
{
    public function index()
    {
        if(auth()->user()->admin == 1){

            $users = DB::table('payments')->join('policy','payments.payunique','policy.newunique')
                        ->where('payment_status', 'succeeded')->get();

            return view('admin.Payment.Payment',compact('users'));
        }
    }

    public function stripe()
    {
        if(auth()->user()->admin == 1){

            $stripe = stripe::orderBy('id', 'asc')->get();

            return view('admin.Payment.Stripe',compact('stripe'));
        }
    }

    public function edit($id)
    {
        $key = stripe::where('id', $id)->first();

    	return view('admin.Payment.EditStripe',compact('id','key'));
    }

    public function editPrice(Request $req)
    {
        $id = $req -> id;

    	$Stripekey = stripe::where('id', $id)->first();
    	$Stripekey -> values = $req -> values;

    	$Stripekey -> save();

    	return redirect('stripe')->with('successful_message','Key updated Successfully');
    }   
}