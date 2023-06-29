<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\policy;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

class terms extends Controller
{
    public function termindex(Request $req)
    {
      $id = $_GET['form-id'];

      $user = new policy;

      $user -> newunique = uniqid();
      $user -> unique_id = $req -> unique_id;
      $user -> policy_name = $req -> policy_name;

      $user -> save();

      return view('PolicyForms.terms-and-conditions',compact('id'));
    }

    public function term(Request $req)
    {
      $this->validate($req,[
       'c_id'=>'required',
       'platforms'=>'required',
       'premium'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> adminn = $req -> adminn;
      $user -> c_id = $req -> c_id;
      $user -> s_id = $req -> s_id;
      $user -> platforms = $req -> platforms;
      $user -> mobile_name = $req -> mobile_name;
      $user -> website_url = $req -> website_url;
      $user -> premium = $req -> premium;

      $user -> save();

      return view('PolicyForms.terms-and-conditions-2',compact('id'));
    }

    public function term1(Request $req)
    {
      $this->validate($req,[
       'company'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> company = $req -> company;
      $user -> company_name = $req -> company_name;
    
      $user -> save();

      return view('PolicyForms.terms-and-conditions-3',compact('id'));
    }

    public function term2(Request $req)
    {
      $this->validate($req,[
       'register'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> register = $req -> register;
      $user -> monitor = $req -> monitor;
      $user -> terminate = $req -> terminate;
    
       $user -> save();

      return view('PolicyForms.terms-and-conditions-4',compact('id'));
    }

    public function term3(Request $req)
    {
      $this->validate($req,[
       'age'=>'required',
       'adult'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> age = $req -> age;
      $user -> adult = $req -> adult;
      $user -> adult_content_warn = $req -> adult_content_warn;
      
      $user -> save();

      return view('PolicyForms.terms-and-conditions-5',compact('id'));
    }

    public function term4(Request $req)
    {
      $this->validate($req,[
       'publish'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> publish = $req -> publish;
      $user -> monitor_a = $req -> monitor_a;
      $user -> marketing = $req -> marketing;
      $user -> terminate_a = $req -> terminate_a;
      $user -> backup = $req -> backup;
      $user -> backup_guarantee = $req -> backup_guarantee;
          
      $user -> save();

      return view('PolicyForms.terms-and-conditions-6',compact('id'));
    }

    public function term5(Request $req)
    {
      $this->validate($req,[
       'sell'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> sell = $req -> sell;
      $user -> remote = $req -> remote;
      $user -> trials = $req -> trials;
      $user -> recurring = $req -> recurring;
      $user -> auto_renewal = $req -> auto_renewal;
      $user -> uptime_guarantee = $req -> uptime_guarantee;
      $user -> downtime_compensation = $req -> downtime_compensation;
      $user -> payments_security = $req -> payments_security;

      if ($req->filled('types')) 
      {
        $user -> types = implode(',', $req -> types);
      }

      if ($req->filled('payments_method')) 
      {
        $user -> payments_method = implode(',', $req -> payments_method);
      }

      if ($req->filled('guarantees')) 
      {
        $user -> guarantees = implode(',', $req -> guarantees);
      }

      if ($req->filled('rights')) 
      {
        $user -> rights = implode(',', $req -> rights);
      }
      
      $user -> save();

      return view('PolicyForms.terms-and-conditions-7',compact('id'));
    }

    public function term6(Request $req)
    {
      $this->validate($req,[
       'affiliate_links'=>'required',
       'ads'=>'required',
       'newsletters'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> affiliate_links = $req -> affiliate_links;
      $user -> ads = $req -> ads;
      $user -> newsletters = $req -> newsletters;
          
      $user -> save();

      return view('PolicyForms.terms-and-conditions-8',compact('id'));
    }

    public function term7(Request $req)
    {
      $this->validate($req,[
       'misc_clauses'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      if ($req->filled('misc_clauses')) 
      {
        $user -> misc_clauses = implode(',', $req -> misc_clauses);
      }
          
      $user -> save();

      return view('PolicyForms.terms-and-conditions-9',compact('id'));
    }

    public function term8(Request $req)
    {
      $this->validate($req,[
       'contacts'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();

      $user -> contact_form = $req -> contact_form;
      $user -> contact_email = $req -> contact_email;
      $user -> contact_address = $req -> contact_address;   

      if ($req->filled('contacts')) 
      {
        $user -> contacts = implode(',', $req -> contacts);
      }        
          
      $user -> save();

      return view('PolicyForms.terms-and-conditions-10',compact('id'));
    }

    public function term9(Request $req)
    {
      $this->validate($req,[
       'notify'=>'required',
      ]);

      $id = $_GET['form-id'];     
      $user = policy::where('unique_id',$id)->first();
      
      $user -> notify = $req -> notify;
    
      $user -> save();

      return view('PolicyForms.terms-and-conditions-11',compact('id'));
    }
}
?>