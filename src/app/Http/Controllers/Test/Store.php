<?php
namespace Dreamcode\Goe\App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class Store extends Controller
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
        $data = $request->all();
        if(isset($data)){
            unset($data['_token']);
            $newStore = $this->storeRepository->create($data);
        }

        $stores = $this->storeRepository->all();
        $returnHTML = view('goe::pages.test2',['stores'=> $stores])->render();
//        return response()->json( array('success' => true, 'html'=>$returnHTML) );
        return response()->json(['msg' => 'OK', 'html' =>$returnHTML, 'store' => $newStore], 200);
    }
}
