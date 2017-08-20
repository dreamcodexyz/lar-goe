<?php
namespace Dreamcode\Goe\App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Customer\CustomerRepositoryInterface;

class Save extends Controller
{
    /**
     * @var CustomerRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $customerRepository;

    public function __construct(
        CustomerRepositoryInterface $customerRepository
    )
    {
        $this->middleware('auth');
        $this->customerRepository = $customerRepository;
    }

    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
                'phone' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = $this->customerRepository->getModel()::find($id);
            }else{
                $model = $this->customerRepository->makeModel();
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
}
