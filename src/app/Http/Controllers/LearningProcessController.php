<?php

namespace App\Http\Controllers;

use App\LearningProcess;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LearningProcessController extends Controller
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
        $data = ['page_title' => __('learning_process.list_title')];

//        $customers = Customer::all();
        $model = LearningProcess::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;

        return view('learning_process.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("learning_process.info_title")];

        if($id){
            $data['form_data'] = LearningProcess::findOrFail($id);
        }else{
            $data['form_data'] = new LearningProcess;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('lesson.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('lesson.status_disable')];

        return view('learning_process.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = LearningProcess::find($id);
            }else{
                $model = new LearningProcess;
            }

            $model->name = $request->input('name');
            $model->content = $request->input('content');
            $model->content_test = $request->input('content_test');
            $model->homework = $request->input('homework');
            $model->note = $request->input('note');
//            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('learning_process/edit/' . $model->id);
        }

        return redirect('learning_process');
    }

    public function deleteAction($id)
    {
        $model = LearningProcess::findOrFail($id);
        $model->delete();
        return redirect('learning_process');
    }

}
