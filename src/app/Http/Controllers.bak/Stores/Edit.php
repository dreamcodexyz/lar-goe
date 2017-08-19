<?php
namespace Dreamcode\Goe\App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Edit extends Controller
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

    public function execute($id = null)
    {
        $data = ['page_title' => __("goe::stores.info_title")];

        if($id){
            $data['form_data'] = $this->storeRepository->find($id);
        }else{
            $data['form_data'] = $this->storeRepository->makeModel();
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('goe::common.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('goe::common.status_disable')];

        return view('goe::stores.form', $data);
    }
}
