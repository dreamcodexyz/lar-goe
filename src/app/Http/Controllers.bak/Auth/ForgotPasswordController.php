<?php

namespace Dreamcode\Goe\App\Http\Controllers\Auth;

class ForgotPasswordController extends \App\Http\Controllers\Auth\ForgotPasswordController
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('goe::auth.passwords.email');
    }
}
