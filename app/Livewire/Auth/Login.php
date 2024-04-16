<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $mobile;
    public function submit()
    {
       
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
            'mobile' => $this->mobile,
        ];
        // if ($credentials['mobile'] > 11) {


        if ($credentials['email'] == null) {
            // Authentication failed
             $this->addError('email', 'Invalid email or password bro.');
         } elseif ($credentials['password'] == null) {
             $this->addError('password', 'pass required password bro.');
         }elseif(Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/');
        }
        //  } elseif ($credentials['mobile'] == null) {
        // //     $this->addError('mobile', 'invalid mobile bro');
        // } 
       
    }
    public function render()
    {
        // dd('hi');

        return view('livewire.auth.login')->extends('components.layouts.login');
    }
}
