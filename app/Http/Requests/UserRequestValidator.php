<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequestValidator extends Request
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
            'name' => 'required|min:3|max:50',
            'lastname' => 'required|min:5|max:50',
            'email' => 'required|unique',
            'password' => 'required|min:8',
            'basic' => 'required',
        ];
    }
}
