<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|min:3|max:50',
                    'lastname' => 'required|min:5|max:50',
                    'nic' => 'required|min:10|max:10',
                    'email' => 'required|unique:users,email|email',
                    'password' => 'required|min:8',
                    'basic' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|min:3|max:50',
                    'lastname' => 'required|min:5|max:50',
                    'nic' => 'required|min:10|max:10',
                    'email' => 'required|email',
                    'basic' => 'required',
                ];
            }
            default:
                break;
        }
    }

}
