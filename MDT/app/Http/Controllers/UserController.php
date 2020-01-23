<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\User;
use MDT\Freelancer;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('approved',0)->get();
        $freelancers=DB::table('freelancers')->get();
        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved' => 1]);

        return redirect()->route('users.index')->withMessage('User approved successfully');
    }

    public function disapprove($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect()->route('users.index')->withMessage('User disapproved successfully');
    }

}
