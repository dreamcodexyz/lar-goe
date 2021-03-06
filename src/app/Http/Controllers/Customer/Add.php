<?php
namespace Dreamcode\Goe\App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Customer\CustomerRepositoryInterface;

class Add extends Controller
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
        $data = ['page_title' => __("goe::customer.customer_info")];
        $class_data = [];
        $model = $this->customerRepository->makeModel();
        $data['form_data'] = $model;
        $data['class_data'] = $class_data;

        $data['result_types'] = $this->customerRepository->getResultOptions();
        $data['status_options'] = $this->customerRepository->getStatusOptions();
        $data['store_options'] = $this->customerRepository->getStoreOptions();
        $data['active_options'] = $this->customerRepository->getActiveOptions();
        $data['reference_options'] = $this->customerRepository->getReferenceOptions();
        $data['parent_hope_options'] = $this->customerRepository->getParentHopeOptions();

        return view('goe::pages.customer.edit', $data);
    }
}
