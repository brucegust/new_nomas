<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfessionalRequest extends FormRequest
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
			'cert_year' => 'required | integer | max: 9999',
			'cert_num' => 'required | string | max:10',
			'lname' => 'required | string | max:255',
			'fname' => 'required | string | max:255'
        ];
    }
	
	public function messages()
    {
        return [
            'cert_year.required' => 'The user\'s Certification Year is required!',
            'cert_num.required' => 'The user\'s Certification Number is required!',
			'lname.required' => 'The user\'s last name is required.',
			'fname.required' => 'The user\'s first name is required.'
        ];
    }
}
