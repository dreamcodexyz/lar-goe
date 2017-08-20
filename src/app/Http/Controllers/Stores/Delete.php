<?php
namespace Dreamcode\Goe\App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Delete extends Controller
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

    public function execute($id)
    {
        $this->storeRepository->delete($id);
        Session::flash('success', 'Success');
        return redirect('stores');
    }
}
