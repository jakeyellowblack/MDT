<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\Category;
use MDT\Time;
use MDT\Post;
use MDT\Skill;
use DB;

class PostController extends Controller
{
    public function __construct()
    {
		
	$this->middleware('auth');
	
    }
	
	public function index()
    {
	
    	$post = Post::all();
		$post = Post::orderby('id', 'DESC');

		
		return view('layout.admin', compact('post'));
    }
	
	
	public function create()
    {
		$categories = Category::all();
		$times = Time::all();
		$skills = Skill::all();
		$post = Post::all()->sortByDesc('id');
			
		
		return view('layout.admin', compact('categories', 'times', 'skills', 'post'));
		
		
	
    }
	
	public function store(Request $request)
    {
        $post = Post::create($request->all());
		
		$post->skill()->sync($request['skill']);
		
		return redirect()->route('post.store')->with('status',
		'Se han guardado los datos correctamente');
    }
	
	
	 public function show(Post $post)
    {
		$pcategories = Category::all();
		
        return view('layout.admin', compact('categories'));
    }
	
}
