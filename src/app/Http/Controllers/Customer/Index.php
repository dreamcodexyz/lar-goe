<?php
namespace Dreamcode\Goe\App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Customer\CustomerRepositoryInterface;

class Index extends Controller
{
    /**
     * @var CustomerRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $customerRepository;

    public function __construct(
        CustomerRepositoryInterface $customerRepository
    )
    {
        $this->middleware('auth');
        $this->customerRepository = $customerRepository;
    }

    public function execute()
    {
        $data = ['page_title' => __('goe::customer.customer_list')];

        $model = $this->customerRepository->all();
        //$model->paginate(10)->sortByDesc("id");
        $data['status_options'] = $this->customerRepository->getStatusOptions();
        $data['store_options'] = $this->customerRepository->getStoreOptions();

        $data['data_table'] = $model;
        $data['search_condition'] = [
            'id' => '',
            'name' => '',
            'code' => '',
            'is_actived' => '',
            'actived' => false,
        ];

        return view('goe::pages.customer.index', $data);

    }
}
