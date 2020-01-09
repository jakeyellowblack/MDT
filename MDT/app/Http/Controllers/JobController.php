<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\Category;
use MDT\Time;
use MDT\Job;
use MDT\Skill;
use DB;

class JobController extends Controller
{
	public function __construct()
    {
		
	$this->middleware('auth');
	
    }
	
	public function index()
    {
	
    	$job = Job::all()->where('user_id', auth()->user()->id);
		

		
		return view('layout.my-profile', compact('job'));
    }
	
	
	public function create()
    {
		$categories = Category::all();
		$times = Time::all();
		$skills = Skill::all();
		$job = Job::all()->sortByDesc('id');
			
		
		return view('layout.admin', compact('categories', 'times', 'skills', 'job'));
		
		
	
    }
	
	public function store(Request $request)
    {
        $job = Job::create($request->all());
        $job->skill()->sync($request['skill']);
		
		return redirect()->route('job.store')->with('status',
		'Se han guardado los datos correctamente');
    }
	
	
	 public function show(Job $job)
    {
		$pcategories = Category::all();
		
        return view('layout.admin', compact('categories'));
    }
	
	public function destroy($id)
    {
		$job = Job::find($id);
		$job->delete();
		
		return redirect()->to('home')->with('status',
		'El Post se ha borrado correctamente');
    }
	
	
}
