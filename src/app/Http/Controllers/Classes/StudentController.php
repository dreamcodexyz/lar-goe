<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Parents;
use App\Consult;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use App\CustomerResult;


class StudentController extends Controller
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

    public function indexAction()
    {
        $data = ['page_title' => __('customer_result.result_list')];

//        $model = Customer::all()->sortByDesc("id");

        $model = CustomerResult::paginate(100)->sortByDesc("id");

        $data['list_data'] = $model;
        $data['result_types'] = $this->getResultOptions();
        return view('customer_result.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function getResultOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('customer_result.result_types.test')];
        $data[] = ['value' => 2, 'label' => __('customer_result.result_types.trial')];
        $data[] = ['value' => 3, 'label' => __('customer_result.result_types.learning')];
        $data[] = ['value' => 4, 'label' => __('customer_result.result_types.learningday')];
        return $data;
    }

    public function editAction($id = null)
    {

        $data = ['page_title' => __("customer_result.result_info")];

        if($id){
            $model = CustomerResult::findOrFail($id);
            $data['form_data'] = $model;
        }else{
            $data['form_data'] = new CustomerResult;
        }
        $data['result_types'] = $this->getResultOptions();
        return view('customer_result.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $id = $request->input('id');
            if(!$id){
                return redirect('customer/result');
            }

            if($request->input('id')){
                $id = $request->input('id');
                $model = CustomerResult::find($id);
            }else{
                $model = new CustomerResult;
            }

            $model->type = $request->input('type');
            $model->result_date = date("Y-m-d", strtotime($request->input('result_date')));
            $model->result = $request->input('result');
            $model->note = $request->input('note');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('customer/result/edit/' . $model->id);
        }

        return redirect('customer/result');
    }

    public function deleteAction($id)
    {
        $model = CustomerResult::findOrFail($id);
        $model->delete();
        return redirect('customer/result');
    }

}
