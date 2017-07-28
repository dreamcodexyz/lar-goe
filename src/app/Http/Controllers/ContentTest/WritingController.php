<?php

namespace App\Http\Controllers\ContentTest;

use App\ContentTest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WritingController extends Controller
{
    use ValidatesRequests;

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
        $data = ['page_title' => __('content_test.list_title')];
        $data['base_router'] = 'content_test/writing';

//        $customers = Customer::all();
        $model = ContentTest::paginate(100)->where('type', '2')->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();

        return view('content_test.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("content_test.info_title")];
        $data['base_router'] = 'content_test/writing';
        if($id){
            $data['form_data'] = ContentTest::findOrFail($id);
        }else{
            $data['form_data'] = new ContentTest;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('content_test.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('content_test.status_disable')];

        return view('content_test.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = ContentTest::find($id);
            }else{
                $model = new ContentTest;
            }

            $model->name = $request->input('name');
            $model->content = $request->input('content');
            $model->note = $request->input('note');
            $model->type = 2;
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('content_test/writing/edit/' . $model->id);
        }

        return redirect('content_test/writing');
    }

    public function deleteAction($id)
    {
        $model = ContentTest::findOrFail($id);
        $model->delete();
        return redirect('content_test/writing');
    }
    function getStatusOptions()
    {
        $data = [];
        $data[] = ['value' => 1, 'label' => __('lesson.status_enable')];
        $data[] = ['value' => 2, 'label' => __('lesson.status_disable')];
        return $data;
    }

}
