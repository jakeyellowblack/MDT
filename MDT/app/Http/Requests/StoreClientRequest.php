<?php

namespace MDT\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'firstnameC' => 'required|alpha|max:255',
			'lastnameC' => 'required|alpha|max:255',
            'emailC' => 'required|string|email:rfc|max:255|unique:users',
			'category_idC' => 'required|integer',
			'country_idC' => 'required|integer',
            'passwordC' => 'required|string|confirmed|min:5',
			'rolesC' => 'required',
        ];
    }
	
	public function messages()
    {
        return [
		    
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
