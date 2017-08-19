<?php
namespace Dreamcode\Goe\App\Http\Controllers\Home;

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
        $data = [];
        $data = ['page_title' => 'Trang chủ'];

//        $count_customer = Customer::all()->count();
//        $count_teacher = Teacher::all()->count();
//        $count_classes = Classes::all()->count();
//        $count_document = Document::all()->count();
//        $count_content_test = ContentTest::all()->count();
//        $count_content_test_speaking = ContentTest::all()->where('type', 1)->count();
//        $count_content_test_writing = ContentTest::all()->where('type', 2)->count();
//        $count_parents = Parents::all()->count();
//        $count_inventory = Inventory::all()->count();
//
//        $count_customer_consult = Customer::all()->where('status', 1)->count();
//        $count_customer_boy = Customer::all()->where('gender', 1)->count();
//        $count_customer_girl = Customer::all()->where('gender', 2)->count();
//        $count_customer_wait_for_test = Customer::all()->where('status', 2)->count();
//        $count_customer_learning = Customer::all()->where('status', 5)->count();
//        $count_customer_leave = Customer::all()->where('status', 6)->count();
//        $count_customer_consult = Customer::all()->where('status', 1)->count();
//        $count_customer_available = $count_customer - $count_customer_learning - $count_customer_leave;

        $count_store_data = '';
        $stores = $this->storeRepository->getAll();
        $count_store = $stores->count();
        foreach($stores as $val){
            $count_store_data .= $val->name.' ';
        }
        $data['count_store'] = isset($count_store) ? $count_store : 0;
        $data['count_store_data'] = isset($count_store_data) ? $count_store_data : 0;



        $data['list_data'] = [];
        $data['count_customer'] = isset($count_customer) ? $count_customer : 0;
        $data['count_teacher'] = isset($count_teacher) ? $count_teacher : 0;
        $data['count_classes'] = isset($count_classes) ? $count_classes : 0;
        $data['count_document'] = isset($count_document) ? $count_document : 0;
        $data['count_content_test'] = isset($count_content_test) ? $count_content_test : 0;
        $data['count_content_test_speaking'] = isset($count_content_test_speaking) ? $count_content_test_speaking : 0;
        $data['count_content_test_writing'] = isset($count_content_test_writing) ? $count_content_test_writing : 0;
        $data['count_parents'] = isset($count_parents) ? $count_parents : 0;
        $data['count_inventory'] = isset($count_inventory) ? $count_inventory : 0;



        $data['count_customer_consult'] = isset($count_customer_consult) ? $count_customer_consult : 0;
        $data['count_customer_boy'] = isset($count_customer_boy) ? $count_customer_boy : 0;
        $data['count_customer_girl'] = isset($count_customer_girl) ? $count_customer_girl : 0;
        $data['count_customer_wait_for_test'] = isset($count_customer_wait_for_test) ? $count_customer_wait_for_test : 0;
        $data['count_customer_learning'] = isset($count_customer_learning) ? $count_customer_learning : 0;
        $data['count_customer_consult'] = isset($count_customer_consult) ? $count_customer_consult : 0;
        $data['count_customer_available'] = isset($count_customer_available) ? $count_customer_available : 0;
        $data['count_customer_leave'] = isset($count_customer_leave) ? $count_customer_leave : 0;


        return view('goe::home.index', $data);
    }
}
