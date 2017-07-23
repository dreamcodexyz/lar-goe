<?php
namespace Dreamcode\Goe\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Teacher;
use App\Classes;
use App\Document;
use App\ContentTest;
use App\Parents;
use App\Inventory;
use App\Store;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = config('site.contact');
        return view('goe::pages.test', compact('contact', $contact));
    }
}
