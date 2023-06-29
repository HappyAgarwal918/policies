<?php
  
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\legal;
use Session;

class LegalController extends Controller
{

    public function index()
    {
        if(auth()->user()->admin == 1){

            $legal = legal::where('id' , 1)->first();

            return view('admin.Legal.Legal',compact('legal'));
        }
    }

    public function edit($id)
    {
        $legal = legal::where('id' , 1)->first();

        return view('admin.Legal.EditLegal',compact('legal'));
    }

    public function update(Request $request)
    {   
    	$legal = legal::where('id',1)->first();
    	$validated = $request->validate([
            'legal' => 'required',]);

        // Create slug from title
        // $validated['slug'] = Str::slug($validated['title'], '-');


         $legal -> legal = $request -> legal;

        // Update Post with validated data
        $legal-> update();
        Session::flash('flash_message', 'Task successfully updated!');

        return redirect(url('/legal'))->with('successful_message', 'Post updated successfully!');
    }

    

}