<?php

namespace MDT\Http\Controllers;

use Illuminate\Http\Request;
use MDT\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('approved',0)->get();
		$clients = User::where('approved',1)->get();
		
        return view('users', compact('users', 'clients'));
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
