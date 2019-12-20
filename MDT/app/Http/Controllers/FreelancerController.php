<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\Category;
use MDT\Freelancer;
use MDT\File;
use MDT\Http\Requests\StoreFreelancerRequest;

class FreelancerController extends Controller
{
	
	public function index()
    {
	
    	$freelancer = Freelancer::all();
		$freelancer = Freelancer::orderby('id', 'DESC');

		return view('complete', compact('freelancer'));
    }
	
    public function create()
    {
    	$categories = Category::all();
		$freelancer = Freelancer::all();
        
		return view('complete', compact('categories', 'freelancer'));
    }

    public function store(StoreFreelancerRequest $request)
    {
		if($request->hasFile('file')) 
		{
		  $file = $request->file('file');
		  $filename = time().$file->getClientOriginalName();
		  $file->move(public_path().'/uploads/', $filename);
        }
		
        $freelancer = new Freelancer();
		
		$freelancer->linkedin_url=$request->input('linkedin_url');
		$freelancer->file= $filename;
		$freelancer->category_id=$request->input('category_id');
		$freelancer->save();

		return redirect()->route('complete.store')->with('status',
		'Registered successfully, please be attentive to your email.');
    }


    public function edit()
    {
    	
    }

    public function update()
    {
    	
    }

    public function destroy()
    {
    	
    }
}
