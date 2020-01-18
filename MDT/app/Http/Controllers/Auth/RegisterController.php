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
use MDT\Freelancer;
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
		 
		if($request->roles==3)
		{
			$this->validatordos($request->all())->validate();
			
		}
		else
		{
			$this->validator($request->all())->validate();
		}

		event(new Registered($user = $this->create($request->all())));

		if($request->roles==3)
		{
			//dd($user);
			//$email = $request->input('email');
			//dd($email);
			//$id = User::where('email','=',$email)->get('id');
			$id = DB::table('users')->latest('id')->first();
			//dd($id);
			//dd($request);
			$request["country_id"] = $id->get('id');
			dd($request);
			$freelancer = new Freelancer(
				array(
					'user_id' 		=> $id->get('id'), 
					'category_id' 	=> $request->get('category_id'),
					'linkedin_url' 	=> $request->get('linkedin_url'),
					'file' 			=> $request->file('file')->store('public/resume'),
			));
			//dd($freelancer);
			$freelancer->save();
		
			return redirect()->route('register')->with('status', 'Registered successfully, please be attentive to your email.');
		}
		else
		{
			return redirect()->route('register')->with('status', 'Successful registration! Welcome to MDT!');
		}
			
	}
	 
    public function __construct()
    {
		
        $this->middleware('guest');
		
    }
	 
    protected function validator(array $data)
    {
		
		Validator::extend('domain', function($attribute, $value, $parameters)
		{
			
			$domain = $parameters[0];
			$pattern = "#^https?://([a-z0-9-]+\.)*".preg_quote($domain)."(/.*)?$#";
			return !! preg_match($pattern, $value);
			
		});
		
		$message = array(
			'approved.required' 	=> 'You must accept the Terms and Conditions.',
			'password.required'	 	=> 'Enter a valid Password.',
			'password.min' 			=> 'Password must contain more than 5 Characters.',
			'password.confirmed' 	=> 'Password confirmation does not match.',
			'country_id.required' 	=> 'Please select a Country.',
			'email.required' 		=> 'Please enter a valid E-Mail.',
			'email.unique' 			=> 'The E-mail has already been registered.',
		);
		
        return Validator::make($data, [
			'firstname' 	=> ['required', 'alpha', 'max:255'],
			'lastname' 		=> ['required', 'alpha', 'max:255'],
            'email' 		=> ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
            'country_id' 	=> ['required', 'integer'],
            'password' 		=> ['required', 'string', 'min:5', 'confirmed'],
			'approved' 		=> ['required'],
        ],$message);
		
    }

    protected function validatordos(array $data)
    {
		
		Validator::extend('domain', function($attribute, $value, $parameters)
		{
			
			$domain = $parameters[0];
			$pattern = "#^https?://([a-z0-9-]+\.)*".preg_quote($domain)."(/.*)?$#";
			return !! preg_match($pattern, $value);
			
		});
		
		$message = array(
			'approved.required' 	=> 'You must accept the Terms and Conditions.',
			'password.required' 	=> 'Enter a valid Password.',
			'password.min' 			=> 'Password must contain more than 5 Characters.',
			'password.confirmed' 	=> 'Password confirmation does not match.',
			'country_id.required' 	=> 'Please select a Country.',
			'email.required' 		=> 'Please enter a valid E-Mail.',
			'email.unique' 			=> 'The E-mail has already been registered.',
			'linkedin_url.required' => 'You must enter a URL of your LinkedIn profile',
			'linkedin_url.unique' 	=> 'The URL entered has already been registered',
			'linkedin_url.domain' 	=> 'Enter a valid LinkedIn profile URL',
			'file.required' 		=> 'Upload a File',
			'file.mimes' 			=> 'Files must be a formatted file: docx, pdf, xml, doc',
			'category_id.required' 	=> 'Please select a Category',
		);
		
        return Validator::make($data, [
        	'firstname' 	=> ['required', 'alpha', 'max:255'],
			'lastname' 		=> ['required', 'alpha', 'max:255'],
            'email' 		=> ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
            'country_id' 	=> ['required', 'integer'],
            'password' 		=> ['required', 'string', 'min:5', 'confirmed'],
			'approved' 		=> ['required'],
			'linkedin_url' 	=> ['unique:freelancers','domain:www.linkedin.com/in'],
			'file' 			=> ['required','mimes:docx,pdf,xml,doc'],
			'category_id' 	=> ['required'],
        ],$message);
    }
		 
    protected function create(array $data)
    {
        $user = User::create([
			'firstname' 	=> $data['firstname'],
			'lastname' 		=> $data['lastname'],
            'email' 		=> $data['email'],
            'country_id' 	=> $data['country_id'],
			'approved' 		=> $data['approved'],
            'password' 		=> Hash::make($data['password'])
        ]);
		$user->roles()->sync($data['roles']);
    	return $user;
    }
	
	
	public function showRegistrationForm()
	{
		$categories = Category::all();
		$countries 	= Country::all();
		$roles 		= Role::all();
		$users 		= User::all();
		
		return view('auth.register', compact('users', 'countries', 'roles','categories'));
		
	}	
	
}
