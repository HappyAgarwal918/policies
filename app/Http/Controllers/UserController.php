<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\policy;
use App\price;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Session;
use App\User;

class UserController extends Controller
{
    public function AuthRouteAPI(Request $request){
      
      return $request->user();
    }

    public function acceptable()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.acceptable-use-policy',compact('data','countries','price'));
    }

    public function acceptableindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.acceptable-use-policy',compact('data','countries','price'));
    }

    public function cookie()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.cookie-policy',compact('data','countries','price'));
    }

    public function cookieindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.cookie-policy',compact('data','countries','price'));
    }

    public function disclaimer()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.disclaimer',compact('data','countries','price'));
    }

    public function disclaimerindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.disclaimer',compact('data','countries','price'));
    }

    public function dmca()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.dmca-policy',compact('data','countries','price'));
    }

    public function dmcaindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.dmca-policy',compact('data','countries','price'));
    }

    public function privacy()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.privacy-policy',compact('data','countries','price'));
    }

    public function privacyindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.privacy-policy',compact('data','countries','price'));
    }

    public function refund()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.refund-policy',compact('data','countries','price'));
    }

    public function refundindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.refund-policy',compact('data','countries','price'));
    }

    public function terms()
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      return view('policy.refund-policy',compact('data','countries','price'));
    }

    public function termsindex(Request $request)
    {
      $data = auth()->user();
      $price = price::where('id',1)->first();
      $countries = DB::table('country')->get();

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $request -> unique_id;
      $user -> policy_name = $request -> policy_name;

      $user -> save();

      return view('policy.terms-and-conditions',compact('data','countries','price'));
    }

    public function acceptablepolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> platforms = $request -> platforms;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> register = $request -> register;
      $user -> share = $request -> share;
      $user -> anon_use = $request -> anon_use;
      $user -> publish = $request -> publish;
      $user -> objectionable = $request -> objectionable;
      $user -> remove = $request -> remove;
      $user -> adult = $request -> adult;
      $user -> sell = $request -> sell;
      $user -> payments_method = $request -> payments_method;
      $user -> diff_name = $request -> diff_name;
      $user -> upload = $request -> upload;
      $user -> execute = $request -> execute;
      $user -> install = $request -> install;
      $user -> send = $request -> send;
      $user -> bulk = $request -> bulk;
      $user -> purchased = $request -> purchased;
      $user -> suspend = $request -> suspend;
      $user -> action = $request -> action;
      $user -> court = $request -> court;
      $user -> notifyy = $request -> notifyy;
      $user -> suspendd = $request -> suspendd;
      $user -> backup = $request -> backup;
      $user -> backup_fee = $request -> backup_fee;
      $user -> actions = $request -> actions;
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts'))
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.acceptable-use-policy-final',compact('id','data'));
    }
  
    public function cookiepolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> privacy_policy = $request -> privacy_policy;
      $user -> privacy_policy_url = $request -> privacy_policy_url;
      $user -> essential = $request -> essential;
      $user -> functionality = $request -> functionality;
      $user -> third_party = $request -> third_party;
      $user -> ads = $request -> ads;
      $user -> cookies_ads_personal_info = $request -> cookies_ads_personal_info;
      $user -> cookies_analytical = $request -> cookies_analytical;
      $user -> cookies_social = $request -> cookies_social;
      $user -> cookies_disable = $request -> cookies_disable;
      $user -> beacons = $request -> beacons;
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.cookie-policy-final',compact('id','data'));
    }

    public function disclaimerpolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();  
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> platforms = $request -> platforms;
      $user -> platforms_other = $request -> platforms_other;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> ebook_name = $request -> ebook_name;
      $user -> landing_url = $request -> landing_url;
      $user -> course_name = $request -> course_name;
      $user -> podcast_name = $request -> podcast_name;
      $user -> video_name = $request -> video_name;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> writer = $request -> writer;
      $user -> original = $request -> original;
      if ($request->filled('specialty')) 
      {
        $user -> specialty = implode(',', $request -> specialty);
      }
      $user -> copy = $request -> copy;
      $user -> share = $request -> share;
      $user -> accept = $request -> accept;
      $user -> identify = $request -> identify;
      $user -> influence = $request -> influence;
      $user -> publish = $request -> publish;
      $user -> monitor = $request -> monitor;
      $user -> reuse = $request -> reuse;
      $user -> terminate = $request -> terminate;
      $user -> testimonials = $request -> testimonials;
      $user -> modify = $request -> modify;
      $user -> compensate = $request -> compensate;
      $user -> affiliate_links = $request -> affiliate_links;
      $user -> affiliate_links_amazon = $request -> affiliate_links_amazon;
      $user -> ads = $request -> ads;
      $user -> advise = $request -> advise;
      $user -> accuracy = $request -> accuracy;
      $user -> modifications = $request -> modifications;
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.disclaimer-final',compact('id','data'));
    }

    public function dmcapolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> platforms = $request -> platforms;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> users = $request -> users;
      $user -> fair_use = $request -> fair_use;
      $user -> formatting = $request -> formatting;
      $user -> instructions = $request -> instructions;
      $user -> court = $request -> court;
      $user -> share_user = $request -> share_user;
      $user -> share_others = $request -> share_others;
      $user -> liability = $request -> liability;
      $user -> counterr = $request -> counterr;
      $user -> formattingg = $request -> formattingg;
      $user -> instructionss = $request -> instructionss;
      $user -> liabilityy = $request -> liabilityy;
      $user -> terminate = $request -> terminate;
      $user -> backup = $request -> backup;
      $user -> backup_fee = $request -> backup_fee;
      $user -> actions = $request -> actions;
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.dmca-policy-final',compact('id','data'));
    }

    public function privacypolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> platforms = $request -> platforms;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> register = $request -> register;
      $user -> register_social = $request -> register_social;
      $user -> info_access = $request -> info_access;
      $user -> info_delete = $request -> info_delete;
      if ($request->filled('info_delete_method')) 
      {
        $user -> info_delete_method = implode(',', $request -> info_delete_method);
      }
      $user -> interact = $request -> interact;
      $user -> info_visible = $request -> info_visible;
      $user -> publish = $request -> publish;
      $user -> share = $request -> share;
      $user -> california = $request -> california;
      $user -> europe = $request -> europe;
      $user -> teens = $request -> teens;
      $user -> children = $request -> children;
      $user -> children_info = $request -> children_info;
      if ($request->filled('children_info_misc')) 
      {
        $user -> children_info_misc = implode(',', $request -> children_info_misc);
      }
      $user -> sell = $request -> sell;
      $user -> remote = $request -> remote;
      $user -> remote_share = $request -> remote_share;
      $user -> payments_store = $request -> payments_store;
      $user -> payments_security = $request -> payments_security;
      if ($request->filled('payments_method')) 
      {
        $user -> payments_method = implode(',', $request -> payments_method);
      }
      $user -> cookiess = $request -> cookiess;
      $user -> cookies_none = $request -> cookies_none;
      $user -> dnt = $request -> dnt;
      $user -> affiliate_links = $request -> affiliate_links;
      $user -> ads = $request -> ads;
      $user -> remarketing = $request -> remarketing;
      $user -> newsletters = $request -> newsletters;
      $user -> newsletters_remote = $request -> newsletters_remote;
      $user -> newsletters_unsubscr = $request -> newsletters_unsubscr;
      $user -> geo = $request -> geo;
      $user -> features = $request -> features;
      $user -> derivative = $request -> derivative;
      $user -> third_party = $request -> third_party;
      if ($request->filled('info')) 
      {
        $user -> info = implode(',', $request -> info);
      }
      if ($request->filled('purpose')) 
      {
        $user -> purpose = implode(',', $request -> purpose);
      }
      $user -> sell_a = $request -> sell_a;
      $user -> merger = $request -> merger;
      $user -> law = $request -> law;
      if ($request->filled('breach')) 
      {
        $user -> breach = implode(',', $request -> breach);
      }
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.privacy-policy-final',compact('id','data'));
    }

    public function refundpolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();

      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> platforms = $request -> platforms;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company_name = $request -> company_name;
      $user -> sell = $request -> sell;
      $user -> trials = $request -> trials;
      $user -> trials_days = $request -> trials_days;
      $user -> trials_functional = $request -> trials_functional;
      $user -> accept = $request -> accept;
      $user -> days = $request -> days;
      $user -> money_back = $request -> money_back;
      $user -> refuse = $request -> refuse;
      $user -> prorate = $request -> prorate;
      if ($request->filled('conditions')) 
      {
        $user -> conditions = implode(',', $request -> conditions);
      }
      $user -> offer = $request -> offer;
      $user -> fee = $request -> fee;
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }

      $user -> save();

      return view('policy.refund-policy-final',compact('id','data'));
    }

    public function termspolicynew(Request $request)
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $request -> adminn;
      $user -> c_id = $request -> c_id;
      $user -> s_id = $request -> s_id;
      $user -> platforms = $request -> platforms;
      $user -> mobile_name = $request -> mobile_name;
      $user -> website_url = $request -> website_url;
      $user -> premium = $request -> premium;
      $user -> company = $request -> company;
      $user -> company_name = $request -> company_name;
      $user -> register = $request -> register;
      $user -> monitor = $request -> monitor;
      $user -> terminate = $request -> terminate;
      $user -> age = $request -> age;
      $user -> adult = $request -> adult;
      $user -> adult_content_warn = $request -> adult_content_warn;
      $user -> publish = $request -> publish;
      $user -> monitor_a = $request -> monitor_a;
      $user -> marketing = $request -> marketing;
      $user -> terminate_a = $request -> terminate_a;
      $user -> backup = $request -> backup;
      $user -> backup_guarantee = $request -> backup_guarantee;
      $user -> sell = $request -> sell;
      $user -> remote = $request -> remote;
      $user -> trials = $request -> trials;
      $user -> recurring = $request -> recurring;
      $user -> auto_renewal = $request -> auto_renewal;
      $user -> uptime_guarantee = $request -> uptime_guarantee;
      $user -> downtime_compensation = $request -> downtime_compensation;
      $user -> payments_security = $request -> payments_security;
      if ($request->filled('types')) 
      {
        $user -> types = implode(',', $request -> types);
      }
      if ($request->filled('payments_method')) 
      {
        $user -> payments_method = implode(',', $request -> payments_method);
      }
      if ($request->filled('guarantees')) 
      {
        $user -> guarantees = implode(',', $request -> guarantees);
      }
      if ($request->filled('rights')) 
      {
        $user -> rights = implode(',', $request -> rights);
      }
      $user -> affiliate_links = $request -> affiliate_links;
      $user -> ads = $request -> ads;
      $user -> newsletters = $request -> newsletters;
      if ($request->filled('misc_clauses')) 
      {
        $user -> misc_clauses = implode(',', $request -> misc_clauses);
      }
      $user -> contact_form = $request -> contact_form;
      $user -> contact_email = $request -> contact_email;
      $user -> contact_address = $request -> contact_address;
      if ($request->filled('contacts')) 
      {
        $user -> contacts = implode(',', $request -> contacts);
      }
      $user -> notify = $request -> notify;

      $user -> save();

      return view('policy.terms-and-conditions-final',compact('id','data'));
    }

    public function acceptablepolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.acceptable-use-policy-final',compact('id','data'));
    }

    public function cookiepolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.cookie-policy-final',compact('id','data'));
    }

    public function disclaimerpolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.disclaimer-final',compact('id','data'));
    }

    public function dmcapolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.dmca-policy-final',compact('id','data'));
    }

    public function privacypolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.privacy-policy-final',compact('id','data'));
    }

    public function refundpolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.refund-policy-final',compact('id','data'));
    }

    public function termspolicyget()
    {
      $id = $_GET['form-id'];
      $data = auth()->user();
      return view('policy.terms-and-conditions-final',compact('id','data'));
    }

    public function completesave(Request $req)
    {
      $id = $_GET['form-id'];

      $email = $req -> email;
      $pass = $req -> password;
      $check_user = User::where('email',$email)->first();
      if(!empty($check_user) && !Auth::check()){
          return back()->with('error_message','User Already found "Login first"');
      }
      elseif(!empty($check_user) && Auth::check()){

          $this->validate($req,[
           'email'=>'required',
          ]);

          $user = policy::where('unique_id',$id)->first();

          $user -> email = $req -> email;
          $user -> url = $req -> url;
          $user -> link = $req -> link;
          $user -> type = $req -> type;
                         
          $user -> save();
      }
      else{
          $this->validate($req,[
           'email'=>'required',
           'password'=>'required',
          ]);
          
          $user = User::create([
            'email' => $email,
            'password' => Hash::make($pass),
          ]);

          $user->sendEmailVerificationNotification();

          $user = policy::where('unique_id',$id)->first();

          $user -> email = $req -> email;
          $user -> url = $req -> url;
          $user -> link = $req -> link;
          $user -> type = $req -> type;
                         
          $user -> save();
      }

      return view('policy.complete');
    }

    public function payment()
    {
      return view('policy.billing');
    }

    public function paymentsave(Request $req)
    {
      $this->validate($req,[
       'email'=>'required',
      ]);

      $id = $_GET['form-id'];

      $email = $req -> email;
      $pass = $req -> password;
      $check_user = User::where('email',$email)->first();

      if(!empty($check_user) && !Auth::check()){
          return back()->with('error_message','User Already found "Login first"');
      }
      elseif(!empty($check_user) && Auth::check()){

          $this->validate($req,[
           'email'=>'required',
          ]);

          $user = policy::where('unique_id',$id)->first();

          $user -> email = $req -> email;
          $user -> url = $req -> url;
          $user -> link = $req -> link;
          $user -> type = $req -> type;
                         
          $user -> save();
      }
      else{
          $this->validate($req,[
           'email'=>'required',
           'password'=>'required',
          ]);
          
          $user = User::create([
            'email' => $email,
            'password' => Hash::make($pass),
          ]);

          $user->sendEmailVerificationNotification();

          $user = policy::where('unique_id',$id)->first();

          $user -> email = $req -> email;
          $user -> url = $req -> url;
          $user -> link = $req -> link;
          $user -> type = $req -> type;
                         
          $user -> save();
      }

          

      return view('policy.billing');
    }
}
?>
