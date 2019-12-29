<?php

namespace MDT\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class StoreFreelancerRequest extends FormRequest
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
		
		Validator::extend('domain', function($attribute, $value, $parameters)
		{
			
			$domain = $parameters[0];
			$pattern = "#^https?://([a-z0-9-]+\.)*".preg_quote($domain)."(/.*)?$#";
			return !! preg_match($pattern, $value);
			
		});
		
		
        return [
            'linkedin_url' => 'required|unique:freelancers|domain:www.linkedin.com/in',
			'file' => ['required','mimes:docx,pdf,xml,doc'],
			'category_id' => 'required',
        ];
    }
	
	public function messages()
    {
        return [
			'linkedin_url.required' => 'You must enter a URL of your LinkedIn profile',
			'linkedin_url.unique' => 'The URL entered has already been registered',
			'linkedin_url.domain' => 'Enter a valid LinkedIn profile URL',
			'file.required' => 'Upload a File',
			'file.mimes' => 'Files must be a formatted file: docx, pdf, xml, doc',
			'category_id.required' => 'Please select a Category',
        ];
    
	$this->validate($request, $rules, $messages);
	}
}
