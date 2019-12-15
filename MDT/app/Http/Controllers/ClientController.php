<?php

namespace MDT\Http\Controllers;

use MDT\Role;
use MDT\Category;
use MDT\Country;
use Illuminate\Http\Request;
use MDT\Http\Requests\StoreClientRequest;


class ClientController extends Controller
{
    public function __construct()
    {
	$this->middleware('auth');
    }
	
    public function create()
    {
		
		$categoriesC = Category::all();
		$countriesC = Country::all();
		$rolesC = Role::all();

		return view('auth.register', compact('categoriesC', 'countriesC', 'rolesC'));
	
    }

    public function store(StoreClientRequest $request)
    {
        $client = new Client();
		
		$client->firstnameC=$request->input('firstnameC');
		$client->lastnameC=$request->input('lastnameC');
		$client->category_idC=$request->input('category_idC');
		$client->country_idC=$request->input('country_idC');
		$client->emailC=$request->input('emailC');
		$client->passwordC=bcrypt($request->input('passwordC'));
		$client->save();
		
		$client->rolesC()->sync($request->get('rolesC'));

		
		return redirect()->route('auth.register')->with('status',
		'Se han guardado los datos correctamente');
    }

    public function show(client $client)
    {
		/*$role_client=DB::table('role_client')->get();
		$roles=DB::table('roles')->get();
		$lugar=DB::table('lugars')->get();
		
        return view('client.show', compact('client', 'roles', 'lugar', 'role_client'));*/
    }

    public function edit(client $client)
    {
        
		/*$roles = Role::get();
		$lugar = Lugar::get();

        return view('client.edit', compact('client', 'roles', 'lugar'));*/
    }

    public function update(StoreclientUpdateRequest $request, client $client)
    {


		/*$data = request()->validate([
			'name' => 'max:100',
			'lastname' => 'max:100',
            'email' => 'email|max:255',
            'password' => 'nullable',
			'cedula' => 'min:7|max:10',
			]);
			
		$data['password'] = bcrypt($data['password']);

        $client->update($data);
	
        $client->roles()->sync($request->get('roles'));
									

		

		
        return redirect()->route('client.index', [$client])->with('status',
        'Los datos se han actualizado correctamente');*/
    }

    public function destroy(client $client)
    {
			
		
		/*$exists=DB::table('asignados')
		->where('client_id', '=', $client->id)
		->first();
		
		
		
        //dd($client->id);
		if($exists)
		 
			{
				return redirect()->route('client.index')->with('status2',
				'El Usuario tiene uno o más equipos asignados. No es posible eliminarlo.');	
			}
		else	
			{
				$client->delete();
				
				return redirect()->route('client.index')->with('status',
				'El Usuario se ha borrado correctamente');
			}*/
    }
}
