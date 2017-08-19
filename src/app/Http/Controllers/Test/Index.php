<?php
namespace Dreamcode\Goe\App\Http\Controllers\Test;

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
        $stores = $this->storeRepository->all();
        return view('goe::pages.test')->with('stores', $stores);
    }
}
