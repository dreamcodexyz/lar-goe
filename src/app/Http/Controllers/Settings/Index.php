<?php
namespace Dreamcode\Goe\App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Settings\SettingsRepositoryInterface;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Index extends Controller
{
    /**
     * @var SettingsRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $repository;
    /**
     * @var StoreRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $storeRepository;

    public function __construct(
        SettingsRepositoryInterface $repository,
        StoreRepositoryInterface $storeRepository
    )
    {
        $this->middleware('auth');
        $this->repository = $repository;
        $this->storeRepository = $storeRepository;
    }

    public function execute()
    {
        $data = ['page_title' => __('goe::stores.list_title')];
        $data['model'] = $this->repository->all();

        return view('goe::pages.settings.layout', $data);
    }

    public function layout()
    {
        $data = ['page_title' => __('goe::stores.list_title')];
        $data['model'] = $this->repository->all();

        return view('goe::pages.settings.layout', $data);
    }

    public function set_store(Request $request)
    {
        $session_data = $request->session()->get('session_data');
        $store_code = $request->input('current_store');

        $store = $this->storeRepository->getModel()::where('code', $store_code)->first();
        if($store){
            $session_data['current_store'] = [
                'code' => $store->code,
                'name' => $store->name
            ];
        }else{
            $session_data['current_store'] = [
                'code' => 'all',
                'name' => 'Tất cả'
            ];
        }

        $request->session()->put('session_data', $session_data);
        return redirect()->back();
    }
}
