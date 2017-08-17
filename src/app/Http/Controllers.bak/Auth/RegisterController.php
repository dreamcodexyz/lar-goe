<?php

namespace Dreamcode\Goe\App\Http\Controllers\Auth;

class RegisterController extends \App\Http\Controllers\Auth\RegisterController
{
    protected $redirectTo = '/';
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('goe::auth.register');
    }
}
