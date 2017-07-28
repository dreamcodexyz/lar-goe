<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

use App\Repositories\Post\StoreRepositoryInterface;

class StoresController extends Controller
{
    /**
     * @var StoreRepositoryInterface|\App\Repositories\StoreRepositoryInterface
     */
    protected $storeRepository;

    public function __construct(StoreRepositoryInterface $storeRepository)
    {
        $this->storeRepository = $storeRepository;
        $this->middleware('auth');
    }

    public function indexAction()
    {
        $data = ['page_title' => __('stores.list_title')];

//        $customers = Customer::all();


        //$model = (new App\Repositories\StoresRepository)->all();

        $model = $this->storeRepository->getAll();

//        $model = Store::paginate(100)->sortByDesc("id");

        $data['list_data'] = $model;
        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('common.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('common.status_disable')];
        return view('stores.list', $data);
    }

    public function newAction()
    {
        return $this->editAction();
    }

    public function editAction($id = null)
    {
        $data = ['page_title' => __("stores.info_title")];

        if($id){
            $data['form_data'] = Store::findOrFail($id);
        }else{
            $data['form_data'] = new Store;
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('common.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('common.status_disable')];

        return view('stores.form', $data);
    }

    public function saveAction(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = Store::find($id);
            }else{
                $model = new Store;
            }

            $model->name = $request->input('name');
            $model->phone = $request->input('phone');
            $model->address = $request->input('address');
            $model->note = $request->input('note');
            $model->is_actived = $request->input('is_actived');

            $model->save();
        }

        if($request->input('save_and_continue')){
            return redirect('stores/edit/' . $model->id);
        }

        return redirect('stores');
    }

    public function deleteAction($id)
    {
        $model = Store::findOrFail($id);
        $model->delete();
        return redirect('stores');
    }
}
