<?php
namespace Dreamcode\Goe\App\Repositories\Customer;

use Dreamcode\Goe\App\Repositories\EloquentRepository;

class CustomerEloquentRepository extends EloquentRepository implements CustomerRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Dreamcode\Goe\App\Repositories\Customer\CustomerModel::class;
    }

    public function getResultOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('customer_result.result_types.test')];
        $data[] = ['value' => 2, 'label' => __('customer_result.result_types.trial')];
        $data[] = ['value' => 3, 'label' => __('customer_result.result_types.learning')];
        $data[] = ['value' => 4, 'label' => __('customer_result.result_types.learningday')];
        return $data;
    }

    public function getStatusOptions(){
        $data = [];
        $data[] = ['value' => 1, 'label' => __('goe::customer.status_options.cantuvan')];
        $data[] = ['value' => 2, 'label' => __('goe::customer.status_options.hentest')];
        $data[] = ['value' => 3, 'label' => __('goe::customer.status_options.datestchuadangky')];
        $data[] = ['value' => 4, 'label' => __('goe::customer.status_options.dahocthuchuadangky')];
        $data[] = ['value' => 5, 'label' => __('goe::customer.status_options.danghoc')];
        $data[] = ['value' => 6, 'label' => __('goe::customer.status_options.nghihoc')];
        return $data;
    }

    public function getStoreOptions()
    {
        $data = [];
        $data[] = ['value' => 1, 'label' => __('goe::customer.store_options.longbien')];
        $data[] = ['value' => 2, 'label' => __('goe::customer.store_options.minhkhai')];
        return $data;
    }

    public function getActiveOptions()
    {
        $data = [];
        $data[] = ['value' => 1, 'label' => __('goe::customer.status_enable')];
        $data[] = ['value' => 2, 'label' => __('goe::customer.status_disable')];
        return $data;
    }

    public function getReferenceOptions()
    {
        $data = [];
        $data[] = ['value' => 0, 'label' => __('goe::common.select')];
        $data[] = ['value' => 1, 'label' => __('goe::customer.reference_options.friend')];
        $data[] = ['value' => 2, 'label' => __('goe::customer.reference_options.face')];
        $data[] = ['value' => 3, 'label' => __('goe::customer.reference_options.web')];
        return $data;
    }

    public function getParentHopeOptions()
    {
        $data = [];
        $data[] = ['value' => 0, 'label' => __('goe::common.select')];
        $data[] = ['value' => 1, 'label' => __('Làm quen với tiếng anh')];
        $data[] = ['value' => 2, 'label' => __('Cải thiện kỹ năng')];
        $data[] = ['value' => 3, 'label' => __('Thi chứng chỉ')];
        return $data;
    }

}