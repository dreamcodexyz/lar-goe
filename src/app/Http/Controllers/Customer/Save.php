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
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = $this->customerRepository->find($id);
            }else{
                $model = $this->customerRepository->makeModel();
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
}
