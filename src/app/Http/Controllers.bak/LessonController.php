<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Carbon\Carbon;


class LessonController extends Controller
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
        $data = ['page_title' => __('lesson.list_title')];

//        $customers = Customer::all();
        $model = Lesson::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        return view('lesson.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("lesson.info_title")];

        if($id){
            $data['form_data'] = Lesson::findOrFail($id);
        }else{
            $data['form_data'] = new Lesson;
        }

        $data['status_options'] = $this->getStatusOptions();

        return view('lesson.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Lesson::find($id);
            }else{
                $model = new Lesson;
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
            return redirect('lesson/edit/' . $model->id);
        }

        return redirect('lesson');
    }

    public function deleteAction($id)
    {
        $model = Lesson::findOrFail($id);
        $model->delete();
        return redirect('lesson');
    }

    function getStatusOptions()
    {
        $data = [];
        $data[] = ['value' => 1, 'label' => __('lesson.status_enable')];
        $data[] = ['value' => 2, 'label' => __('lesson.status_disable')];
        return $data;
    }

}
