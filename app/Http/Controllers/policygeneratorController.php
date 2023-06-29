<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class policygeneratorController extends Controller
{
    public function acceptablegenerator()
    {
        return view('policy_generator.acceptable_policy_generator');
    }

    public function cookiegenerator()
    {
        return view('policy_generator.cookie_policy_generator');
    }

    public function cookieconsent()
    {
        return view('policy_generator.cookie_consent_banner');
    }

    public function dmcagenerator()
    {
        return view('policy_generator.dmca_policy_generator');
    }

    public function refundgenerator()
    {
        return view('policy_generator.refund_policy_generator');
    }

    public function disclaimergenerator()
    {
        return view('policy_generator.disclaimer_generator');
    }

    public function privacygenerator()
    {
        return view('policy_generator.privacy_generator');
    }

    public function termsgenerator()
    {
        return view('policy_generator.terms_generator');
    }
}
