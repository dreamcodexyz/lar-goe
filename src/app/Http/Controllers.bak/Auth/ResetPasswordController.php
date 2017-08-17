<?php

namespace Dreamcode\Goe\App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ResetPasswordController extends \App\Http\Controllers\Auth\ResetPasswordController
{
    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('goe::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
