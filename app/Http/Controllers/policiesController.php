<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class policiesController extends Controller
{
    public function acceptableBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.acceptable_use_basic_policy');
        }
        else{
            return view('policy.guest.acceptable_use_basic_policy');
        }
    }

    public function cookieBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.cookie_basic_policy');
        }
        else{
            return view('policy.guest.cookie_basic_policy');
        }
    }

    public function disclaimerBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.disclaimer_basic_policy');
        }
        else{
            return view('policy.guest.disclaimer_basic_policy');
        }
    }

    public function dmcaBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.dmca_basic_policy');
        }
        else{
            return view('policy.guest.dmca_basic_policy');
        }
    }

    public function privacyBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.privacy_basic_policy');
        }
        else{
            return view('policy.guest.privacy_basic_policy');
        }
    }

    public function refundBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.refund_basic_policy');
        }
        else{
            return view('policy.guest.refund_basic_policy');
        }
    }

    public function termsBasic()
    {
        if (Auth::check()) {
            return view('policy.auth.terms_and_conditions_basic_policy');
        }
        else{
            return view('policy.guest.terms_and_conditions_basic_policy');
        }
    }

    public function acceptablePremium()
    {
        if (Auth::check()) {
            return view('policy.auth.acceptable_use_premium_policy');
        }
        else{
            return view('policy.guest.acceptable_use_premium_policy');
        }
    }

    public function cookiePremium()
    {
        if (Auth::check()) {
            return view('policy.auth.cookie_premium_policy');
        }
        else{
            return view('policy.guest.cookie_premium_policy');
        }
    }

    public function disclaimerPremium()
    {
        if (Auth::check()) {
            return view('policy.auth.disclaimer_premium_policy');
        }
        else{
            return view('policy.guest.disclaimer_premium_policy');
        }
    }

    public function dmcaPremium()
    {
        if (Auth::check()) {
            return view('policy.auth.dmca_premium_policy');
        }
        else{
            return view('policy.guest.dmca_premium_policy');
        }
    }

    public function privacyPremium()
    {
        if (Auth::check()) {
            return view('policy.auth.privacy_premium_policy');
        }
        else{
            return view('policy.guest.privacy_premium_policy');
        }
    }

    public function refundPremium()
    {
        if (Auth::check()) {
            return view('policy.auth.refund_premium_policy');
        }
        else{
            return view('policy.guest.refund_premium_policy');
        }
    }

    public function termsPremium()
    {
        if (Auth::check()) {
            return view('policy.auth.terms_and_conditions_premium_policy');
        }
        else{
            return view('policy.guest.terms_and_conditions_premium_policy');
        }
    }
}
