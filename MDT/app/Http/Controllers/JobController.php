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
		
		return redirect()->route('job.store');
    }
	
	
	 public function show(Job $job)
    {
		$pcategories = Category::all();
		
        return view('layout.admin', compact('categories'));
    }
	
	public function destroy($id)
    {	
			
		//$job = Job::where('user_id', 1)->select("user_id")->first();
	
		//$job=DB::table('jobs')->find('user_id');
		
		 //$job=Job::pluck('user_id');
		 
		 //$job = Job::where("user_id",$user_id)->firstOrFail(); 

		 dd($job);
				
		if($job->user_id == auth()->user()->id){
				
				return redirect()->to('home')->with('status2',
				'The Post has been deleted successfully');
		}
		else{
				return redirect()->to('home')->with('status2',
				'aaaa');
			}
		
    }
	
	
}
