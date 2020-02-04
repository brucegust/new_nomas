<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            //
			'title'		=> 'required | unique:pages',
			'body'	=> 'required'
        ];
    }
	public function messages()
    {
        return [
            'title is.required' => 'title is required!',
            'content is.required' => 'content is required!'
        ];
    }
}
