<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\policy;

class policyController extends Controller
{
    public function index()
    {
        return view('admin.policy.newpolicy');
    }

    public function addpolicy()
    {
        $data = User::get();

        return view('admin.policy.policyform', compact('data'));
    }

    public function policysave(Request $request)
    {
        // $data = $request->except(['token']);

        $data = new policy;
        // Create and save post with validated data
        $data->email = $request->email;
        $data->website_url = $request->mobile_name;
        $data->policy_name = $request->policy_name;
        $data->type = $request->type;
        $data->unique_id = $request->unique_id;
        $data->url = $request->url;
        $data->link = $request->url;
        $data->adminn = $request->adminn;
        $data->newunique = $request->newunique;
        $data->editor = $request->editor;

        $data -> save();

        // echo "<pre>";print_r($data);die;

        return back()->with('successful_message', 'Policy Added Successfully');
    }

}
