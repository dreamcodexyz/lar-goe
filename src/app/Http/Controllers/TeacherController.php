<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TeacherController extends Controller
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
        $data = ['page_title' => __('teacher.list_title')];

//        $customers = Customer::all();
        $model = Teacher::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('teacher.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('teacher.status_disable')];

        return view('teacher.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("teacher.info_title")];

        if($id){
            $data['form_data'] = Teacher::findOrFail($id);
        }else{
            $data['form_data'] = new Teacher;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('teacher.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('teacher.status_disable')];

        return view('teacher.form', $data);
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
                $model = Teacher::find($id);
            }else{
                $model = new Teacher;
            }

            $model->name = $request->input('name');
            $model->phone = $request->input('phone');
            $model->note = $request->input('note');
            $model->facebook = $request->input('facebook');
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('teacher/edit/' . $model->id);
        }

        return redirect('teacher');
    }

    public function deleteAction($id)
    {
        $model = Teacher::findOrFail($id);
        $model->delete();
        return redirect('teacher');
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A title is required',
            'phone.required'  => 'A message is required',
        ];
    }

}
