<?php

namespace App\Http\Controllers;

use App\Parents;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ParentsController extends Controller
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
        $data = ['page_title' => __('parent.parent_list')];

//        $customers = Customer::all();
        $model = Parents::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;

        return view('parent.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("parent.parent_info")];

        if($id){
            $data['form_data'] = Parents::findOrFail($id);
        }else{
            $data['form_data'] = new Parents;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('parent.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('parent.status_disable')];

        return view('parent.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Parents::find($id);
            }else{
                $model = new Parents;
            }

            $model->name = $request->input('name');
            $model->phone = $request->input('phone');
            $model->note = $request->input('note');
            $model->gender = $request->input('gender');
            $model->facebook = $request->input('facebook');
            $model->status = $request->input('status');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('parent/edit/' . $model->id);
        }

        return redirect('parent');
    }

    public function deleteAction($id)
    {
        $model = Parents::findOrFail($id);
        $model->delete();
        return redirect('parent');
    }



}
