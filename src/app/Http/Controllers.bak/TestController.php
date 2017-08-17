<?php
namespace Dreamcode\Goe\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

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

//        $store = $this->storeRepository->getAll();
//        dd($store->toArray());

        $data['contact'] = config('site.contact');
        $data['session_data'] = session()->all();
        $data['session_data2'] = Session::all();
        $data['x'] = $_SERVER;

        return view('goe::pages.test', $data);
    }

    public function store(Request $request)
    {
        $store_id = $request->input('store_id');
        $request->session()->put('store_id', $store_id);

//        dd($request->session()->all());
        session(['store_id' => $store_id]);
        $data = session()->all();
        return response()->json(['msg' => 'OK', 'result' => $data], 200);

        //https://laravel.com/docs/5.4/responses
    }

}
