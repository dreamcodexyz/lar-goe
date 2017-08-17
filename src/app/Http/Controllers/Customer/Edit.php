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

        if($id){
            $data['form_data'] = $this->customerRepository->find($id);
        }else{
            $data['form_data'] = $this->customerRepository->makeModel();
        }

        $data['status_options'] = [];
        $data['status_options'][] = ['value' => 1, 'label' => __('goe::common.status_enable')];
        $data['status_options'][] = ['value' => 2, 'label' => __('goe::common.status_disable')];

        return view('goe::stores.form', $data);
    }
}
