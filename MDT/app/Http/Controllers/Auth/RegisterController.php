<?php

namespace MDT\Http\Controllers\Auth;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use MDT\Http\Controllers\Controller;
use MDT\User;
use MDT\Category;
use MDT\Country;
use MDT\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
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
    protected $redirectTo = '/register';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
	 
		 public function register(Request $request)
	 {
	 $this->validator($request->all())->validate();
	 event(new Registered($user = $this->create($request->all())));
	 return back()->with('status',
		'Registered successfully, please be attentive to your email.');
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
            'category_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
			'roles' => ['required'],
			'linkedin_url' => ['required','unique:users', 'domain:www.linkedin.com/in']
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
			'linkedin_url' => $data['linkedin_url'],
            'category_id' => $data['category_id'],
            'country_id' => $data['country_id'],
            'password' => Hash::make($data['password'])
        ]);
		
		$user->roles()->sync($data['roles']);

    	return $user;
    }
	



		public function showRegistrationForm()
	{
	
		$categories = Category::all();
		$countries = Country::all();
		$roles = Role::all();

		return view('auth.register', compact('categories', 'countries', 'roles'));
		
	}
	

}
