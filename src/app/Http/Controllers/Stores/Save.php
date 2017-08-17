<?php
namespace Dreamcode\Goe\App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Save extends Controller
{
    /**
     * @var StoreRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $storeRepository;

    public function __construct(
        StoreRepositoryInterface $storeRepository
    )
    {
        $this->middleware('auth');
        $this->storeRepository = $storeRepository;
    }

    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            if($request->input('id')){
                $id = $request->input('id');
                $model = $this->storeRepository->find($id);
            }else{
                $model = $this->storeRepository->makeModel();
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
