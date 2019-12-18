<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\Category;
use MDT\Time;
use MDT\Post;
use MDT\Skill;

class PostController extends Controller
{
    public function __construct()
    {
		
	$this->middleware('auth');
	
    }
	
	public function create()
    {
		$categories = Category::all();
		$times = Time::all();
		$skills = Skill::all();
		
		return view('layout.admin', compact('categories', 'times', 'skills'));
	
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
