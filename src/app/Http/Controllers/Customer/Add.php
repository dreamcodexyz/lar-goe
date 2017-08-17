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

        $data['status_options'] = $this->customerRepository->getStatusOptions();
        $data['result_types'] = $this->customerRepository->getResultOptions();

        $data['store_options'] = [];
        $data['store_options'][] = ['value' => 1, 'label' => __('customer.store_options.longbien')];
        $data['store_options'][] = ['value' => 2, 'label' => __('customer.store_options.minhkhai')];

        $data['active_options'] = [];
        $data['active_options'][] = ['value' => 1, 'label' => __('customer.status_enable')];
        $data['active_options'][] = ['value' => 2, 'label' => __('customer.status_disable')];

        $data['reference_options'] = [];
        $data['reference_options'][] = ['value' => 0, 'label' => __('common.select')];
        $data['reference_options'][] = ['value' => 1, 'label' => __('customer.reference_options.friend')];
        $data['reference_options'][] = ['value' => 2, 'label' => __('customer.reference_options.face')];
        $data['reference_options'][] = ['value' => 3, 'label' => __('customer.reference_options.web')];


        $data['parent_hope_options'] = [];
        $data['parent_hope_options'][] = ['value' => 0, 'label' => __('common.select')];
        $data['parent_hope_options'][] = ['value' => 1, 'label' => 'Làm quen với tiếng anh'];
        $data['parent_hope_options'][] = ['value' => 2, 'label' => 'Cải thiện kỹ năng'];
        $data['parent_hope_options'][] = ['value' => 3, 'label' => 'Thi chứng chỉ'];

        return view('goe::customer.form', $data);
    }
}
