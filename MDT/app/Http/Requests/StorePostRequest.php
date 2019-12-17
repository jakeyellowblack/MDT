<?php

namespace MDT\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:255',
			'price' => 'required|integer|max:30',
			'description' => 'required',
			'category_id' => 'required|string',
            'time_id' => 'required|string',
			'skill_id' => 'required|string',
        ];
    }
}
