<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends FormRequest
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
        if(isset($_POST['back'])) {
             return [];
        }

            else {
            return [
                    "name"      => "required | min:3",
                    "email"     => ["required","email"],
                    "password"  => "required",
                    "phone"     => "required",
                    "role_type" => "required",
                    "image"     => ["mimes:jpg,png"],
            ];
        }
    }

}
