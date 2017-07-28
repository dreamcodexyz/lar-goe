<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DocumentController extends Controller
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
        $data = ['page_title' => __('document.list_title')];

//        $customers = Customer::all();
        $model = Document::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('teacher.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('teacher.status_disable')];
        return view('document.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("document.info_title")];

        if($id){
            $data['form_data'] = Document::findOrFail($id);
        }else{
            $data['form_data'] = new Document;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('document.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('document.status_disable')];

        return view('document.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Document::find($id);
            }else{
                $model = new Document;
            }

            $model->name = $request->input('name');
            $model->address = $request->input('address');
            $model->note = $request->input('note');
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('document/edit/' . $model->id);
        }

        return redirect('document');
    }

    public function deleteAction($id)
    {
        $model = Document::findOrFail($id);
        $model->delete();
        return redirect('document');
    }

}
