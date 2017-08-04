<?php

namespace Dreamcode\Goe\App\Http\Controllers\Auth;

class LoginController extends \App\Http\Controllers\Auth\LoginController
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('goe::auth.login');
    }
}
