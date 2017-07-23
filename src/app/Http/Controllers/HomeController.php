<?php
namespace Dreamcode\Goe\App\Http\Controllers;

use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

use App\Http\Controllers\Controller;

class HomeController extends Controller
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

        $store = $this->storeRepository->getAll();

        dd($store);

        $contact = config('site.contact');
        return view('goe::pages.test', compact('contact', $contact));
    }
}
