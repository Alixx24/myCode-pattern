<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UserRegRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if($this->isMethod('post')){
            return [
                'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
                'email' => 'required',
                'age' => '',
                'password' => 'required',
                'about_me' => '',
                'cv' => '',
                'image' => 'image|mimes:png,jpg,jpeg,gif',
                'persian_cv' => '',
             
            ];
        }
        else 
         {
            return [
                'name' => 'required',
              
                
            ];
        }
    }
}
