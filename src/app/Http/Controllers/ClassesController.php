<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Customer;
use App\ClassesStudent;

class ClassesController extends Controller
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
        $data = ['page_title' => __('classes.list_title')];

//        $customers = Customer::all();
        $model = Classes::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        return view('classes.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("classes.info_title")];

        if($id){
            $model = Classes::findOrFail($id);

            $student_data = [];
            $students = $model->student_ids()->get();
            foreach($students as $val){
                $student_data[] = Customer::where('id', $val->customer_id)->first();
            }

            $data['form_data'] = $model;
            $data['student_data'] = $student_data;

//            dd(count($student_data));
        }else{
            $data['form_data'] = new Classes;
        }

        $data['status_options'] = $this->getStatusOptions();
        $data['result_types'] = $this->getStatusOptions();

        return view('classes.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Classes::find($id);
            }else{
                $model = new Classes;
            }

            $model->name = $request->input('name');
            $model->size = $request->input('size');
            $model->type = $request->input('type');
            $model->note = $request->input('note');
            $model->start_date = date("Y-m-d", strtotime($request->input('start_date')));
            $model->end_date = date("Y-m-d", strtotime($request->input('end_date')));
            $model->open_time = date("H:i", strtotime($request->input('open_time')));
            $model->close_time = date("H:i", strtotime($request->input('close_time')));
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('classes/edit/' . $model->id);
        }

        return redirect('classes');
    }

    public function deleteAction($id)
    {
        $model = Classes::findOrFail($id);
        $model->delete();
        return redirect('classes');
    }

    public function getStatusOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('classes.status_enable')];
        $data[] = ['value' => 2, 'label' => __('classes.status_disable')];
        return $data;
    }

}
