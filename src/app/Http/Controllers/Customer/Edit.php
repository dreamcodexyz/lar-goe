<?php
namespace Dreamcode\Goe\App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Customer\CustomerRepositoryInterface;

class Edit extends Controller
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

    public function execute($id = null)
    {
        $data = ['page_title' => __("goe::stores.info_title")];
        $class_data = [];

        if($id){
            $data['form_data'] = $this->customerRepository->find($id);
        }else{
            return redirect()->back();
        }

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
