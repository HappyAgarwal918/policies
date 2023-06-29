<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
use App\billing;
use DB;
 
class PaymentController extends Controller
{
    public function billingsave(Request $request)
    {
        // $lastInvoiceID = billing::pluck('invoice_id')->last();
        // $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $data = $request->all();
        $data['invoice_id'] = '#'.uniqid();
        // echo "<pre>"; print_r($data);die;

        $user = billing::create($data); 

        // $user = new billing;

        // $user -> first_name = $request -> first_name;
        // $user -> last_name = $request -> last_name;
        // $user -> company = $request -> company;
        // $user -> address = $request -> address;
        // $user -> city = $request -> city;
        // $user -> zip = $request -> zip;
        // $user -> c_id = $request -> c_id;
        // $user -> s_id = $request -> s_id;
        // $user -> email = $request -> email;
        // $user -> phone = $request -> phone;
        // $user -> billunique = $request -> billunique;
        // $user -> invoice_id = '#'.uniqid();
    
        // $user -> save();

        return view('policy.payment');
    }

    public function charge(Request $request)
    {
        $stripe = DB::table('stripe')->where('id', 2)->first(); 

        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');


            $gateway->setApiKey($stripe->values);
          
            $token = $request->input('stripeToken');
          
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
          
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();

                 
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
          
                if(!$isPaymentExist)
                {
                    // $payment = Payment::where('unique_id', $unique_id)->first();
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->payunique = $request->input('newunique');
                    
                    $payment->save();
                }

                return view('policy.complete');
 
                // return "Payment is successful. Your payment id is: ". $arr_payment_data['id'];
            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }
}