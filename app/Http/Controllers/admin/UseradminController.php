<?php
  
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\policy;
use DB;
use Carbon\Carbon;
use session;
use Auth;
use Illuminate\Support\Facades\Validator;

class UseradminController extends Controller
{

    public function index()
    {
        if(auth()->user()->admin == 1){

            return view('admin.User.User');
        }
    }

    public function edit($email)
    {
        $users = DB::table('policy')->where('email', $email)
                ->leftjoin('payments','policy.newunique','payments.payunique')
                ->orderBy('created', 'desc')->get();

    	return view('admin.User.Useredit',compact('email','users'));
    }

    public function edituser($email)
    {
        $users = DB::table('policy')->where('email', $email)
                ->leftjoin('payments','policy.newunique','payments.payunique')
                ->orderBy('created', 'desc')->get();

        return view('admin.User.EditUser',compact('email','users'));
    }

    public function destroy($id)
    {
    	$user=User::findOrFail($id);
    	$user->delete();
    	return back()->with('successful_message','User deleted Successfully');
    }

    public function restore($id)
    {
        $user=User::withTrashed()->find($id)->restore();

        return back()->with('successful_message','User Restored Successfully');
    }

    // public function destroyPolicy($unique_id)
    // {
    //     $user=policy::findOrFail($unique_id);
    //     $user->delete();
    //     return back()->with('success','User deleted Successfully');
    // }

    public function addnew()
    {
        return view('admin.User.Register');
    }

    public function addUser(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],
        ]);
        $user = array(
            "name" => $req->name,
            "email" => $req->email,
            'password' => Hash::make($req['password']),
            "created_at"=> Carbon::now(),
            "updated_at"=> now(),
            'email_verified_at' => now());

            DB::table('users')->insert($user);
     
        return redirect('user')->with('successful_message', 'User Added Successfully!');
    }

    public function change(Request $req)
    {
        $req->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],
        ]);

        $data =  User::updateOrCreate(['email' => $req-> email,
        ],[
            'password' => Hash::make($req -> password),
        ]);

       return back()->with('successful_message', 'Password Changed Successfully!');
    }

    public function editadmin(Request $req)
    {
        $email = $req -> email;
        $user = User::where('email',$email)->first();
        $user -> admin = $req -> adminn;
        
        $user -> update();

        return redirect()->back()->with('successful_message', 'User type changed Successfully!');
    }

    public function activate(Request $req, $email)
    {
        $user = User::where('email',$email)->first();
        $user -> email_verified_at = now();
        
        $user -> update();

        return back()->with('successful_message', 'User activated Successfully!');
        
    }
}