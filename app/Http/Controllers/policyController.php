<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\custom_clause;
use App\lifetime_deal;
use App\policy;
use App\User;
use DB;
use Auth;
use Hash;

class policyController extends Controller
{
    public function invoice()
    {
        return view('policy.invoice');
    }

    public function my_policies()
    {
        $users = DB::table('users')
            ->join('policy','users.email','policy.email')
            ->leftjoin('payments','policy.newunique','payments.payunique')
            ->where('users.email', Auth::user()->email )
            ->orderBy('created', 'desc')
            ->get();

        return view('policy.my_policies',compact('users'));
    }

    public function policydestroy($unique_id)
    {
        $user=policy::findOrFail($unique_id);
        $user->delete();

        return redirect('/home')->with('successful_message','Policy deleted Successfully');
    }

    public function customclause()
    {
        return view('policy.custom_clause');
    }

    public function customclausesave(Request $request)
    {
        $data = $request->except('_token');

        $user = custom_clause::Create($data);

        // return view('policy.user-custom-clause');
        return redirect('custom-clause-home?form-id='.$data['unique_id']);
    }

    public function clausehome()
    {
        return view('policy.user-custom-clause');
    }

    public function customclausedestroy($id)
    {
        $user=custom_clause::findOrFail($id);
        $user->delete();

        return back()->with('successful_message','Custom Clause deleted Successfully');
    }

    public function bundlebill()
    {
      $newunique = uniqid();

      return view('policy.bundle',compact('newunique'));
    }

    public function bundlebilling1(Request $request)
    {
      $users = $request->policies;
      $url = $request->url;
      $len = sizeof($users);
      $billunique = $_GET['form-id'];

      // print_r($users);print_r($url);die();
      // echo die();

      if (is_array($users) || is_object($users))
      {
        foreach ($users as $key => $val) {
        
            $data = new policy;

            $data -> unique_id = $abc = uniqid();
            $data -> link = 'billing?form-id='.$abc;
            $data -> mobile_name = 'N/A';
            $data -> newunique = $billunique;
            $data -> email = $request -> email;
            $data -> policy_name = $val;
            $data -> type = 'Bundle * '.$len;
            $data -> url = $url[$key].'?form-id='.$abc;
            
            $data -> save();
        }
      }
        return view('policy.bundle-billing');
     }

     function lifetimedeal()
    {
        $price = DB::table('price')->where('id', 2)->first();

        return view('lifetime-deal',compact('price'));
    }

     public function lifetimedealsave(Request $request)
     {
        $this->validate($request,[
            'email'=>'required',
        ]);

        $name = $request -> name;
        $email = $request -> email;
        $pass = $request -> password;

        $check_user = User::where('email',$email)->first();
        if(!empty($check_user) && !Auth::check()){
            return back()->with('error_message','User Already found "Login first"');
        }
        elseif(!empty($check_user) && Auth::check()){
            $user = new lifetime_deal;
            $user -> unique_id = uniqid();
            $user -> newunique = uniqid();
            $user -> email = $request -> email;
            $user -> save();
        }
        else{
                $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($pass),
            ]);

            $user->sendEmailVerificationNotification();

            $user = new lifetime_deal;
            $user -> unique_id = uniqid();
            $user -> newunique = uniqid();
            $user -> email = $request -> email;
            $user -> save();
        }

      return view('billing',compact('$user'));
    }
}
