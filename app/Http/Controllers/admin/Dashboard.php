<?php
  
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\img;
use App\address;


class Dashboard extends Controller
{

     public function index()
    {
        if(auth()->user()->admin == 1){

            $a = address::where('id', 1)->first();

            return view('admin.Dashboard.Dashboard',compact('a'));
        }
    }

    public function store(Request $request)
	{
        if($request->hasFile('featured_image')) {
            $originName = $request->file('featured_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('featured_image')->move(public_path('logo'), $fileName);
   
            
             $url = asset('logo/'.$fileName);       
        }

        $logo = img::where('id', 1)->first();
    	$logo -> featured_image = $url;

    	$logo -> save();

    	return redirect('dashboard')->with('successful_message','logo Changed Successfully');
	}
	
	public function edit()
    {
        $address = address::where('id', 1)->first();

        return view('admin.Dashboard.EditAddress',compact('address'));
    }

    public function editaddress(Request $req)
    {
        $address = address::where('id', 1)->first();
        $address -> seller_company_name = $req -> company_name;
        $address -> seller_address = $req -> address;
        $address -> seller_zip = $req -> zip;
        $address -> seller_country = $req -> country;

        $address -> save();

        return redirect('dashboard')->with('successful_message','Address Changed Successfully');
    }
}