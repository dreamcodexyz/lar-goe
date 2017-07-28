<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Carbon\Carbon;


class InventoryController extends Controller
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
        $data = ['page_title' => __('inventory.list_title')];

//        $customers = Customer::all();
        $model = Inventory::paginate(100)->sortByDesc("id");
        $data['list_data'] = $model;

        return view('inventory.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("inventory.info_title")];

        if($id){
            $data['form_data'] = Inventory::findOrFail($id);
        }else{
            $data['form_data'] = new Inventory;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('inventory.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('inventory.status_disable')];

        return view('inventory.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Inventory::find($id);
            }else{
                $model = new Inventory;
            }

            $model->name = $request->input('name');
            $model->qty = $request->input('qty');
            $model->price = $request->input('price');
            $model->total = $request->input('price') * $request->input('qty');
            $model->note = $request->input('note');
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('inventory/edit/' . $model->id);
        }

        return redirect('inventory');
    }

    public function deleteAction($id)
    {
        $model = Inventory::findOrFail($id);
        $model->delete();
        return redirect('inventory');
    }

}
