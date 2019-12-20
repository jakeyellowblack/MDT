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
			'file' => 'required',
			'category_id' => 'required',
        ];
    }
}
