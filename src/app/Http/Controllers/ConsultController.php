<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Parents;
use App\Consult;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ConsultController extends Controller
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
        $data = ['page_title' => __('consult.customer_list')];

        $data['consult_options'] = $this->getConsultOptions();
        $data['status_options'] = $this->getStatusOptions();


        $model = Consult::all()->whereIn('status', array(0, 1, 2))->sortByDesc("id");
//        $model = Customer::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        return view('consult.list', $data);
    }

    public function waitAction()
    {
        $data = ['page_title' => __('consult.customer_waitlist')];

        $data['consult_options'] = $this->getConsultOptions();
        $data['status_options'] = $this->getStatusOptions();


        $model = Consult::all()->where('status', 3)->sortByDesc("id");
//        $model = Customer::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;
        return view('consult.wait_list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }
    
    public function editAction($id = null)
    {
        $data = ['page_title' => __("consult.customer_info")];

        if($id){
            $model = Consult::findOrFail($id);
            if($model->customer()->value('status') == '1'){
                $data['form_data'] = $model;
            }else{
                return redirect('consult');
            }
        }else{
            $data['form_data'] = new Consult;
        }

        $data['consult_options'] = $this->getConsultOptions();
        $data['status_options'] = $this->getStatusOptions();
        $data['active_options'] = $this->getActiveOptions();

        return view('consult.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'customer_id' => 'required',
            ]);

            $id = $request->input('id');
            if(!$id){
                return redirect('consult');
            }

            $model = Consult::find($id);
            $model->note = $request->input('note');
            $model->status_consult = $request->input('status_consult');
            $model->status = $request->input('status');
            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('consult/edit/' . $model->id);
        }

        return redirect('consult');
    }

    public function getConsultOptions(){
        $data = [];
        $data[] = ['value' => 0, 'label' => __('consult.consult_options.lan0')];
        $data[] = ['value' => 1, 'label' => __('consult.consult_options.lan1')];
        $data[] = ['value' => 2, 'label' => __('consult.consult_options.lan2')];
        $data[] = ['value' => 3, 'label' => __('consult.consult_options.lan3')];
        return $data;
    }

    public function getStatusOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('consult.status_options.chotuvan')];
        $data[] = ['value' => 2, 'label' => __('consult.status_options.cantuvan')];
        $data[] = ['value' => 3, 'label' => __('consult.status_options.dangkyhoc')];
        return $data;
    }

    public function getActiveOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('consult.status_enable')];
        $data[] = ['value' => 2, 'label' => __('consult.status_disable')];
        return $data;
    }
}
