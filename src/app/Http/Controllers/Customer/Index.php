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

        $model = $this->customerRepository->getAll();
        //$model->paginate(10)->sortByDesc("id");
        $data['list_data'] = $model;
        $data['status_options'] = $this->customerRepository->getStatusOptions();
        $data['store_options'] = $this->customerRepository->getStoreOptions();

        return view('goe::customer.list', $data);
    }



}
