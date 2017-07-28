<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Grid extends Controller
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
        $data = ['page_title' => 'Grid table data'];
        return view('pages.example.grid', $data);
    }
}