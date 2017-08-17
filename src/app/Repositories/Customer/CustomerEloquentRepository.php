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

}