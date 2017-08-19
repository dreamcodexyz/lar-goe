<?php
namespace Dreamcode\Goe\App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Index extends Controller
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

    public function execute()
    {
        $data = ['page_title' => __('goe::stores.list_title')];

        $model = $this->storeRepository->all();
        $data['store'] = $this->storeRepository->makeModel();
        $data['stores'] = $model;
        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('goe::common.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('goe::common.status_disable')];

        return view('goe::pages.stores.index', $data);
    }
}
