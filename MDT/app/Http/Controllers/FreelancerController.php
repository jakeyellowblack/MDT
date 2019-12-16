<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\Category;
use MDT\Country;
use MDT\Role;

class FreelancerController extends Controller
{
	public function __construct()
    {
		$this->middleware('auth');
    }

    public function create()
    {
    	$categoriesF = Category::all();
        $countriesF = Country::all();
        $rolesF = Role::all();
		return view('auth.register', compact('categoriesF', 'countriesF', 'rolesF'));
    }

    public function store(StoreFreelancerRequest $request)
    {
        $freelancer = new Freelancer();
        
        $freelancer->firstnameF=$request->input('firstnameF');
        $freelancer->lastnameF=$request->input('lastnameF');
        $freelancer->category_id=$request->input('category_idF');
        $freelancer->country_id=$request->input('country_idF');
        $freelancer->emailF=$request->input('emailF');
        $freelancer->linkedin_urlF=$request->input('linkedin_urlF');
        $freelancer->fileF=$request->input('fileF');
        $freelancer->passwordF=bcrypt($request->input('passwordF'));
              
        
        $freelancer->save();
        
        $freelancer->roles()->sync($request->get('roles'));

        
        return redirect()->route('auth.register')->with('status',
        'Se han guardado los datos correctamente');
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
