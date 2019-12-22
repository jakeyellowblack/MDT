<?php

namespace MDT\Http\Controllers\Auth;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use MDT\Http\Controllers\Controller;
use MDT\User;
use MDT\Country;
use MDT\Role;
use MDT\Category;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use DB;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
	 
    protected $redirectTo = '/complete';
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
	 
	public function register(Request $request)
	{
		 
		$this->validator($request->all())->validate();
		if($request->roles==3)
		$request->approved==0;
		event(new Registered($user = $this->create($request->all())));
		
		
		
		if($request->roles==2)
		 
			{
				
				return redirect()->route('register')->with('status', 'No pasó');
			}
		else	
			{
				
				return redirect()->route('complete')->with('status', 'Pasó');
			}
			
		
		
	}

	 
    public function __construct()
    {
		
        $this->middleware('guest');
		
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
	 
    protected function validator(array $data)
    {
		
		Validator::extend('domain', function($attribute, $value, $parameters)
		{
			
			$domain = $parameters[0];
			$pattern = "#^https?://([a-z0-9-]+\.)*".preg_quote($domain)."(/.*)?$#";
			return !! preg_match($pattern, $value);
			
		});
		
		
        return Validator::make($data, [
			'firstname' => ['required', 'alpha', 'max:255'],
			'lastname' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
            'country_id' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
			'roles' => ['required'],
        ]);
		
    }
	
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MDT\User
     */
	 
    protected function create(array $data)
    {
		
        $user = User::create([
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
            'email' => $data['email'],
            'country_id' => $data['country_id'],
			'approved' => $data['approved'],
            'password' => Hash::make($data['password'])
        ]);
		
	
		$user->roles()->sync($data['roles']);
		
		
    	return $user;
		
    }
	
	
		public function showRegistrationForm()
	{
	
		$countries = Country::all();
		$roles = Role::all();
		$users = User::all();
		
		return view('auth.register', compact('users', 'countries', 'roles'));
		
	}	
	
}
