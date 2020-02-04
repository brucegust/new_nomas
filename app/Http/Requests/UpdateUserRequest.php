<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

class UpdateUserRequest extends FormRequest
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
			'name' => 'required | string | max:255',
        ];
    }
	
	
	public function messages()
    {
        return [
            'name.required' => 'name is required!',
			'password.confirmed' => 'make sure both your "password" and your "confirm password" fields match!'
        ];
    }
	
	public function validator(Factory $factory) {
			$validator = $factory->make($this->input(), $this->rules(), $this->messages());
			$validator->sometimes('password', 'required | string | min:8 | confirmed', function($input) {
			return $input->update_pass == "1";
			});

    return $validator;
	}
}
