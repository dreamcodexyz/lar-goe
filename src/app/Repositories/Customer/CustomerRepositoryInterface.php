<?php
namespace Dreamcode\Goe\App\Repositories\Customer;

interface CustomerRepositoryInterface
{
    /**
     * Make Model
     * @return mixed
     */
    public function makeModel();

    /**
     * get Model
     * @return mixed
     */
    public function getModel();

    public function getStatusOptions();
    public function getResultOptions();
    public function getStoreOptions();
}