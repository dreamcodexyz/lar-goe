
<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Parents;
use App\Consult;
use App\CustomerResult;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\ClassesStudent;
use App\Classes;
use Illuminate\Support\Facades\Route;

class CustomersController extends Controller
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

        $data = ['page_title' => __('customer.customer_list')];

//        $model = Customer::all()->sortByDesc("id");

        $model = Customer::paginate(10)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        $data['store_options'] = $this->getStoreOptions();

        return view('customer.list', $data);
    }

    public function getStoreOptions()
    {
        $data = [];
        $data[] = ['value' => 1, 'label' => __('customer.store_options.longbien')];
        $data[] = ['value' => 2, 'label' => __('customer.store_options.minhkhai')];
        return $data;
    }

    public function leaveAction()
    {
        $data = ['page_title' => __('customer.customer_leavelist')];
        $model = Customer::all()->where('status', 6)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        $data['store_options'] = $this->getStoreOptions();

        return view('customer.list', $data);
    }

    public function waitForTestAction()
    {
        $data = ['page_title' => __('customer.customer_waittestlist')];
        $model = Customer::all()->where('status', 2)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        $data['store_options'] = $this->getStoreOptions();

        return view('customer.list', $data);
    }
    public function learningAction()
    {
        $data = ['page_title' => __('customer.customer_learninglist')];
        $model = Customer::all()->where('status', 5)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        $data['store_options'] = $this->getStoreOptions();

        return view('customer.list', $data);
    }
    public function trialAction()
    {
        $data = ['page_title' => __('customer.customer_learninglist')];
        $model = Customer::all()->where('status', 4)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->getStatusOptions();
        $data['store_options'] = $this->getStoreOptions();

        return view('customer.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function getStatusOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('customer.status_options.cantuvan')];
        $data[] = ['value' => 2, 'label' => __('customer.status_options.hentest')];
        $data[] = ['value' => 3, 'label' => __('customer.status_options.datestchuadangky')];
        $data[] = ['value' => 4, 'label' => __('customer.status_options.dahocthuchuadangky')];
        $data[] = ['value' => 5, 'label' => __('customer.status_options.danghoc')];
        $data[] = ['value' => 6, 'label' => __('customer.status_options.nghihoc')];
        return $data;
    }

    public function editAction($id = null)
    {

        $data = ['page_title' => __("customer.customer_info")];

        $class_data = [];
        if($id){
            $model = Customer::findOrFail($id);
//            dd($model->customer_results->all());
            $classes = $model->classes()->get();
            foreach($classes as $val){
                $class_data[] = Classes::where('id', $val->class_id)->first();
            }

            $data['form_data'] = $model;
        }else{
            $data['form_data'] = new Customer;
        }

        $data['class_data'] = $class_data;

        $data['status_options'] = $this->getStatusOptions();
        $data['result_types'] = $this->getResultOptions();

        $data['store_options'] = [];
        $data['store_options'][] = ['value' => 1, 'label' => __('customer.store_options.longbien')];
        $data['store_options'][] = ['value' => 2, 'label' => __('customer.store_options.minhkhai')];

        $data['active_options'] = [];
        $data['active_options'][] = ['value' => 1, 'label' => __('customer.status_enable')];
        $data['active_options'][] = ['value' => 2, 'label' => __('customer.status_disable')];

        $data['reference_options'] = [];
        $data['reference_options'][] = ['value' => 0, 'label' => __('common.select')];
        $data['reference_options'][] = ['value' => 1, 'label' => __('customer.reference_options.friend')];
        $data['reference_options'][] = ['value' => 2, 'label' => __('customer.reference_options.face')];
        $data['reference_options'][] = ['value' => 3, 'label' => __('customer.reference_options.web')];


        $data['parent_hope_options'] = [];
        $data['parent_hope_options'][] = ['value' => 0, 'label' => __('common.select')];
        $data['parent_hope_options'][] = ['value' => 1, 'label' => 'Làm quen với tiếng anh'];
        $data['parent_hope_options'][] = ['value' => 2, 'label' => 'Cải thiện kỹ năng'];
        $data['parent_hope_options'][] = ['value' => 3, 'label' => 'Thi chứng chỉ'];

        return view('customer.form', $data);
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
                $model = Customer::find($id);
            }else{
                $model = new Customer;
            }

            $model->name = $request->input('name');
            $model->phone = $request->input('phone');
            $model->school = $request->input('school');
            $model->facebook = $request->input('facebook');
            $model->birthday =  date("Y-m-d", strtotime($request->input('birthday')));
            $model->gender = $request->input('gender');
            $model->note = $request->input('note');
            $model->reference_from = $request->input('reference_from');
            $model->is_actived = $request->input('is_actived');
            $model->status = $request->input('status');
            $model->store_id = $request->input('store_id');
            $model->save();

            if($parent = $request->input('parent')){
                if($parent['name']){
                    if($parent['id']){
                        $parent_model = Parents::findOrFail($parent['id']);
                        if($parent_model->id){
                            $model->parent_id = $parent['id'];


                        }
                    }else{
                        $parent_model = new Parents;
                    }

                    $parent_model->name = $parent['name'];
                    $parent_model->email = $parent['email'];
                    $parent_model->phone = $parent['phone'];
                    $parent_model->facebook = $parent['facebook'];
                    $parent_model->note = $parent['note'];
                    $parent_model->hope = $parent['hope'];
                    $parent_model->save();
                    $model->parent_id = $parent_model->id;
                }
            }

            $model->save();

            if( $model->status == 1 && $model->id){
                $consult_model = Consult::where('customer_id', $model->id)->first();

                if(!$consult_model){
                    $consult_model = new Consult;
                }

                $consult_model->customer_id = $model->id;
                $consult_model->save();
            }
        }

        if($request->input('save_and_continue')){
            return redirect('customer/edit/' . $model->id);
        }

        return redirect('customer');
    }

    public function deleteAction($id)
    {
        $model = Customer::findOrFail($id);
        $model->delete();
        return redirect('customer');
    }


    public function getResultOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('customer_result.result_types.test')];
        $data[] = ['value' => 2, 'label' => __('customer_result.result_types.trial')];
        $data[] = ['value' => 3, 'label' => __('customer_result.result_types.learning')];
        $data[] = ['value' => 4, 'label' => __('customer_result.result_types.learningday')];
        return $data;
    }

}
