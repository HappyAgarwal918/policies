<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\legal;
use DB;
use Auth;
use App\price;
use Captcha;

class frontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }

    function create()
    {
        return view('frontend.create');
    }

    function pricing()
    {
        $premium = price::where('id', 1)->first();
        $basic = price::where('id', 9)->first();

        return view('frontend.pricing',compact('premium','basic'));
    }

    function testimonials()
    {
        return view('frontend.testimonial');
    }

    function settings()
    {
        $users = DB::table('users')
            ->join('policy','users.email','policy.email')
            ->leftjoin('payments','policy.newunique','payments.payunique')
            ->join('price','policy.type','price.policy')
            ->where('users.email', Auth::user()->email )
            ->where('policy.type','!=','Basic')
            ->orderBy('created', 'desc')
            ->get();

        return view('frontend.settings',compact('users'));
    }

    function about()
    {
        return view('frontend.about');
    }

    function contact()
    {
        return view('frontend.contact_us');
    }

    public function contactsave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);

        $data = $request->except('_token');

        $user = contact::Create($data);

        return back()->with('successful_message','Our contact team will reach you shortly.');

    }

    public function reloadCaptcha()
    {
        return response()->json([
            'captcha' => Captcha::img()
        ]);
    }

    function faq()
    {
        return view('frontend.faq');
    }

    function termsandprivacy()
    {
        return view('frontend.legal');
    }

    function cookieconsentbanner()
    {
        return view('policy.cookie_consent_banner');
    }

    function blog()
    {
        return view('frontend.blog');
    }

    function blogs()
    {
        return view('frontend.blogs');
    }
}
