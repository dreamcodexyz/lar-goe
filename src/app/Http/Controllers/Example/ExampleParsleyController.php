<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExampleParsleyController extends Controller
{
    public function getIndex()
    {
        return view('pages.example');
    }

    public function indexAction()
    {
        echo 'indexAction'; die;
        return view('pages.example');
    }

    public function sessionAction()
    {
        return view('pages.example.session');
    }

}