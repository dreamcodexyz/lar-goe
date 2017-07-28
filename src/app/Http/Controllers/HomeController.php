<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Teacher;
use App\Classes;
use App\Document;
use App\ContentTest;
use App\Parents;
use App\Inventory;
use App\Store;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data = ['page_title' => 'Trang chủ'];

        $count_customer = Customer::all()->count();
        $count_teacher = Teacher::all()->count();
        $count_classes = Classes::all()->count();
        $count_document = Document::all()->count();
        $count_content_test = ContentTest::all()->count();
        $count_content_test_speaking = ContentTest::all()->where('type', 1)->count();
        $count_content_test_writing = ContentTest::all()->where('type', 2)->count();
        $count_parents = Parents::all()->count();
        $count_inventory = Inventory::all()->count();
        $count_store = Store::all()->count();

        $count_customer_consult = Customer::all()->where('status', 1)->count();
        $count_customer_boy = Customer::all()->where('gender', 1)->count();
        $count_customer_girl = Customer::all()->where('gender', 2)->count();
        $count_customer_wait_for_test = Customer::all()->where('status', 2)->count();
        $count_customer_learning = Customer::all()->where('status', 5)->count();
        $count_customer_leave = Customer::all()->where('status', 6)->count();
        $count_customer_consult = Customer::all()->where('status', 1)->count();
        $count_customer_available = $count_customer - $count_customer_learning - $count_customer_leave;

        $count_store_data = '';
        $stores = Store::all();
        foreach($stores as $val){
            $count_store_data .= $val->name.' ';
        }


        $data['list_data'] = [];
        $data['count_customer'] = $count_customer;
        $data['count_teacher'] = $count_teacher;
        $data['count_classes'] = $count_classes;
        $data['count_document'] = $count_document;
        $data['count_content_test'] = $count_content_test;
        $data['count_content_test_speaking'] = $count_content_test_speaking;
        $data['count_content_test_writing'] = $count_content_test_writing;
        $data['count_parents'] = $count_parents;
        $data['count_inventory'] = $count_inventory;
        $data['count_store'] = $count_store;
        $data['count_store_data'] = $count_store_data;


        $data['count_customer_consult'] = $count_customer_consult;
        $data['count_customer_boy'] = $count_customer_boy;
        $data['count_customer_girl'] = $count_customer_girl;
        $data['count_customer_wait_for_test'] = $count_customer_wait_for_test;
        $data['count_customer_learning'] = $count_customer_learning;
        $data['count_customer_consult'] = $count_customer_consult;
        $data['count_customer_available'] = $count_customer_available;
        $data['count_customer_leave'] = $count_customer_leave;


        return view('home.index', $data);
    }
}
