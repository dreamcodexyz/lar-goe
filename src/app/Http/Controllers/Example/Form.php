<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Form extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function execute()
    {
        $data = ['page_title' => 'Form data'];
        return view('pages.example.form', $data);
    }
}