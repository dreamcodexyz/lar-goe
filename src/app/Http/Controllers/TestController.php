<?php
namespace Dreamcode\Goe\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;
//use Dreamcode\Goe\App\Repositories\Store\StoreEloquentRepository;

class TestController extends Controller
{

    /**
     * @var StoreRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $storeRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(
         StoreRepositoryInterface $storeRepository
     )
     {
//         $this->middleware('auth');
         $this->storeRepository = $storeRepository;
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stores = $this->storeRepository->getAll();
        return view('goe::pages.test')->with('stores', $stores);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if(isset($data)){
            unset($data['_token']);
            $newStore = $this->storeRepository->create($data);
        }

        $stores = $this->storeRepository->getAll();
        $returnHTML = view('goe::pages.test2',['stores'=> $stores])->render();
//        return response()->json( array('success' => true, 'html'=>$returnHTML) );
        return response()->json(['msg' => 'OK', 'html' =>$returnHTML, 'store' => $newStore], 200);

        //https://laravel.com/docs/5.4/responses
    }

}
