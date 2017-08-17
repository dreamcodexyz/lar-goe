<?php

namespace App\Http\Controllers;

use App\ExtraHelp;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ExtraHelpController extends Controller
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
        $data = ['page_title' => __('extra_help.list_title')];

//        $customers = Customer::all();
        $model = ExtraHelp::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;

        return view('extra_help.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("extra_help.info_title")];

        if($id){
            $data['form_data'] = ExtraHelp::findOrFail($id);
        }else{
            $data['form_data'] = new ExtraHelp;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('extra_help.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('extra_help.status_disable')];

        return view('extra_help.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = ExtraHelp::find($id);
            }else{
                $model = new ExtraHelp;
            }

//            $model->name = $request->input('name');
            $model->class_id = $request->input('class_id');
            $model->customer_id = $request->input('customer_id');
            $model->teacher_id = $request->input('teacher_id');
            $model->content = $request->input('content');
            $model->date = $request->input('date');
            $model->result = $request->input('result');
            $model->note = $request->input('note');
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('extra_help/edit/' . $model->id);
        }

        return redirect('extra_help');
    }

    public function deleteAction($id)
    {
        $model = ExtraHelp::findOrFail($id);
        $model->delete();
        return redirect('extra_help');
    }

}
